<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\APIModels\User;
use App\Models\Permission;
use Illuminate\Support\Str;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Hash;
use Mail;
use Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
    if (!Auth::attempt($request->only('email', 'password'))) {
        
        return response()->json([
            'status' => false,
            'message' => 'Unauthorized'

            ], 401);
        }

    $user = User::where('email', $request['email'])->firstOrFail();

    $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
                'status' => true,
                'user' => $user,
                'access_token' => $token,
                'token_type' => 'Bearer',
        ]);
    }

    public function authCheck(Request $request){

        return response()->json([
            'status' => 200,
            'message' => 'valid token'
        ]);
    }

    public function register(Request $request){

        try{

            //checking user availability for email
    
            $user = User::where('email',$request->email)->get()->first();
    
            if($user == null){

                $user = User::create([
                    'email' => $request->email,
                    'password' => $request->password,
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'phone' => $request->phone,
                    'username' => $request->email,
                    'dob' => $request->dob,
                    'status' => User::ACTIVE,
                    'role_id' => 2,
                ]);
        
                $permissions = Permission::pluck('id');
        
                $user->permissions()->attach($permissions);
        
                return response()->json([
                    'status' => true,
                    'payload' => $user
                ]);


            }else{

                return response()->json([
                    'status' => false,
                    'message' => "User exists for the email - ".$request->email,
                    'payload' => $user
                ]);

            }
    
        }catch(\Exception $exception){

            return response()->json([
                'status' => false,
                'message' => "Error occured - ".$exception->getMessage()." - line - ".$exception->getLine()
            ]);
        }
        
       


    }

    public function getUserForResetPasswordToken($token){

        try{

            $user = User::where('password_reset_token',$token)->get()->first();
    
            if($user != null){               
        
        
                return response()->json([
                    'status' => true,
                    'message' => 'User found',
                    'payload' => $user
                ]);


            }else{

                return response()->json([
                    'status' => false,
                    'message' => "User not found for the reset password token",
                    'payload' => null
                ]);

            }

        }catch(\Exception $exception){

            return response()->json([
                'status' => false,
                'message' => "Error occured - ".$exception->getMessage()." - line - ".$exception->getLine()
            ]);
        }
    }

    public function forgotPassword(Request $request){
       
        try{

            $user = User::where('email',$request->email)->get()->first();
            
            if($user != null){

                //generate password reset token 
                $resetToken = Str::random(32);

                $details = array(
                    'subject' => config('app.name')." - Reset Password Request",
                    'introduction' => "Hi ".$user->first_name.",",
                    'body' => "A request has been received to change the password for your account. Ignore if this is not you.",
                    'link' =>  env('API_BASE_URL').'reset-password/'.$resetToken
                );
                

                Mail::to($request->email)->send(new ForgotPasswordMail($details));

                $user->password_reset_token = $resetToken;
                $user->save();

                

                $response = response()->json([
                    'status' => 'success',
                    'message' => 'forgot password email sent successfully !',
                    'payload' => null
                ]);
                

            }else{

                $response = response()->json([
                    'status' => 'failed',
                    'message' => 'No user registered with the email - '.$request->email,
                    'payload' => null
                ]);
            }


        }catch(\Exception $exception){

            $response = response()->json([
                'status' => 'failed',
                'message' => 'error occured',
                'payload' => $exception->getMessage().' - line - '.$exception->getLine()
            ]);
        }

        return $response;
    }

    public function resetPassword(Request $request){
       
        $response = response()->json([]);

        try{

            $user = User::where('email',$request->email)->get()->first();
            
            if($user != null){
                
                $user->password = Hash::make($request->password);
                $user->password_reset_token = null;
                $user->save();                

                $response = response()->json([
                    'status' => 'success',
                    'message' => 'Password changed successfully !',
                    'payload' => null
                ]);
                

            }else{

                $response = response()->json([
                    'status' => 'failed',
                    'message' => 'No user registered with the email - '.$request->email,
                    'payload' => 'No user registered with the email - '.$request->email,
                ]);
            }


        }catch(\Exception $exception){

            $response = response()->json([
                'status' => 'failed',
                'message' => 'error occured',
                'payload' => $exception->getMessage().' - line - '.$exception->getLine()
            ]);
        }

        return $response;
    }
}
