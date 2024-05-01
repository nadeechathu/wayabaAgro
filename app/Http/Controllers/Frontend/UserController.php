<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Zone;
use App\Models\Address;
use App\Models\User;
use App\Models\CustomerAddress;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Mail\ForgotPasswordMail;
use App\Models\UserLog;
use App\Models\Order;
use App\Models\GeneralSetting;
use App\Models\Country;
use Auth;
use URL;
use Mail;

class UserController extends Controller
{
    //

    public function getUserAccountDetails()
    {
        
        $customer = Customer::with('billingAddresses','shippingAddresses','orders','wishlist')->where('user_id',Auth::user()->id)->get()->first();


   


        if($customer == null){

            $customer = new Customer;

            $customer->first_name = Auth::user()->first_name;
            $customer->last_name =  Auth::user()->last_name;
            $customer->email = Auth::user()->email;
            $customer->phone = Auth::user()->phone;
            $customer->address = null;
            $customer->user_id = Auth::user()->id;

            $saved_customer = Customer::create($customer->toArray());

            $customer = Customer::with('billingAddresses','shippingAddresses','orders','wishlist')->where('user_id',Auth::user()->id)->get()->first();
        }

        // dd($customer);
        $orders = $customer->orders()->paginate(env("RECORDS_PER_PAGE"));
         
        $zones = Zone::all();
        $countries = Country::where('status',1)->get();

        return view('frontend.user.profile',compact('customer','orders','zones','countries'));
    }

    public function editUserAddresses(Request $request){

        try{

            $address = CustomerAddress::where('id',$request->address_id)->get()->first();


           if($address != null){
                
                $address->first_name = $request->first_name;
                $address->last_name = $request->last_name;
                $address->email = $request->email;
                $address->phone = '+61'.$request->phone;
                $address->address_line1 = $request->address_line1;
                $address->address_line2 = $request->address_line2;
                $address->country = $request->country;
                $address->city = $request->city;
                $address->zip = $request->zip;
                $address->company = $request->company;
                $address->state = $request->state;

                $address->save();

                if(Auth::user()){
                    $addressType = "Billing";
                    if($address->type == 1){
                        $addressType = "Shipping";
                    }
                    //saving user log
                    UserLog::saveUserLog(Auth::user()->id, $addressType." address updated", "Customer address updated");
                } 
           }

           return back()->with('success','Address details updated successfully !');



        }catch(\Exception $exception){

            $error = $exception->getMessage().' - line - '.$exception->getLine();
            return view('frontend.errors.error_500',compact('error'));

        }
    }

    public function setActiveAddress(Request $request){

        $customerId = $request->customer_id;
        $activeAddressId = $request->address_id;
        $type = $request->type;
        
        CustomerAddress::where('customer_id',$customerId)
        ->where('type',$type)->update(['active_status' => 0]);

        CustomerAddress::where('id',$activeAddressId)->update(['active_status' => 1]);

        if(Auth::user()){
            //saving user log
            UserLog::saveUserLog(Auth::user()->id, "Active address changed", "Active ".$type == 0 ? "billing" : "shipping"." address changed");
        } 

        return back()->with('success','Active address updated successfully !');
    }

    public function addNewAddress(Request $request){
           
        try{

            $address = new CustomerAddress;

            $address->type = $request->address_type;
            $address->customer_id = $request->customer_id;
            $address->first_name = $request->first_name;
            $address->last_name = $request->last_name;
            $address->email = $request->email;
            $address->phone = '+61'.$request->phone;
            $address->address_line1 = $request->address_line1;
            $address->address_line2 = $request->address_line2;
            $address->country = $request->country;
            $address->city = $request->city;
            $address->zip = $request->zip;
            $address->company = $request->company;
            $address->state = $request->state;
    
            $savedBillingAddress = CustomerAddress::create($address->toArray());

            if(Auth::user()){
                //saving user log
                UserLog::saveUserLog(Auth::user()->id, "New address added", "New ".$request->address_type == 0 ? "billing" : "shipping"." address added");
            } 
    
            return back()->with('success','New address added successfully !');

        }catch(\Exception $exception){

            $error = $exception->getMessage().' - line - '.$exception->getLine();
            return view('frontend.errors.error_500',compact('error'));

        }
       
    }

    public function updateProfile(Request $request){
        // 'email' => ['unique:customers,email,'.$request->customer_id],
        $validated = $request->validate([
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'email' => ['required'],
            'phone' => ['required', 'digits:10'],
        ]);

        $customer = Customer::where('id',$request->customer_id)->get()->first();

        if($customer != null){

            $customer->first_name = $request->first_name;
            $customer->last_name = $request->last_name;
            $customer->email = $request->email;
            $customer->phone = '+61'.$request->phone;            

            $user = User::where('id',$customer->user_id)->get()->first();

            if($user != null){

                $user->first_name = $request->first_name;
                $user->last_name = $request->last_name;
                $user->phone = $request->phone;

                if($request->current_password != null and $request->new_password != null and $request->confirm_password != null){

                    //password changing

                if(Hash::check( $request->current_password, $user->password)){

                    if($request->new_password == $request->confirm_password){

                        $user->password = Hash::make($request->new_password);

                        
                    }else{

                        return back()->with('error','Password confirmation does not match !');
                    }

                }else{

                    return back()->with('error','Current password does not match !');
                }

                }
            
            }

            $customer->save();
            $user->save();

            if(Auth::user()){
                //saving user log
                UserLog::saveUserLog(Auth::user()->id, "Profile updated", "Customer profile updated");
            } 

            return back()->with('success','Your details updated successfully');

        }else{

            $error = "Customer not found !";
            return view('frontend.errors.error_404',compact('error'));
        }

        
    }

    public function orderPlacingSucceeded($id){

        $trackingNumber = $id;

        $order = Order::where('tracking_number',$trackingNumber)->get()->first();

        if($order != null){ 

            return view('frontend.user.order_success',compact('trackingNumber'));

        }else{

            $error = "Invalid tracking number";
            return view('frontend.errors.error_404',compact('error'));

        }

    }


    public function forgotPasswordUI(){
        return view('auth.forgot_password');
    }

    public function forgotPassword(Request $request){   
                
        try{

            if($request->has('email')){

                $user = User::where('email',$request->email)->get()->first();

                if($user != null){

                    //generate password reset token 
                    $resetToken = Str::random(32);

                    $siteLogo = GeneralSetting::getSettingByKey('site_logo');

                    $details = array(
                        'subject' => config('app.name')." - Reset Password Request",
                        'introduction' => "Hi ".$user->first_name.",",
                        'body' => "A request has been received to change the password for your account. Ignore if this is not you.",
                        'link' =>  URL::to('reset-password/'.$resetToken),
                        'logo' => URL::to($siteLogo->description)
                    );

    
                    Mail::to($user->email)->send(new ForgotPasswordMail($details));
    
                    $user->password_reset_token = $resetToken;
                    $user->save();   
                    
                    //saving user log
                    UserLog::saveUserLog($user->id, "Password reset requested", "Password reset link sent to email ".$user->email);
                    
    
                    return back()->with('success','Please check your registered email address and follow the instructions.');

                }else{

                    return back()->with('error','No user registered with the provided email.');
                }
                
    
            }else{
                return back()->with('error','Please enter the email address');
            }

        }catch(\Exception $exception){

            $error = $exception->getMessage().' - line - '.$exception->getLine();
            return view('frontend.errors.error_500',compact('error'));
        }
    }

    public function resetPassword($token){

        try{

            $user = User::where('password_reset_token',$token)->get()->first();
    
            if($user != null){               
                
                $email = $user->email;
        
                return view('auth.reset_password',compact('email'));


            }else{

                $error = "Invalid password reset attempt";
                return view('frontend.errors.error_404',compact('error'));

            }
            

        }catch(\Exception $exception){

            $error = $exception->getMessage().' - line - '.$exception->getLine();
            return view('frontend.errors.error_500',compact('error'));
        }

    }

    public function changePassword(Request $request){


        try{

            $request->validate([
                'email' => ['required'],                
                'password' => ['required'],
                'confirm_password' => ['required']
            ]);

            if($request->password != $request->confirm_password){

                return back()->with('error','Passwords does not match. Please check again.');
            }


            $user = User::where('email',$request->email)->get()->first();
            
            if($user != null){
                
                $user->password = Hash::make($request->password);
                $user->password_reset_token = null;
                $user->save();  

                 //saving user log
                 UserLog::saveUserLog($user->id, "Password changed", "Password changed for the email ".$user->email);
                
                Auth::logout();

                return redirect('/login')->with('success', 'Password changed. Please login with new password');
                

            }else{

                return back()->with('error','Password change failed. Reason - No user found for the given email');
            }

        }catch(\Exception $exception){

            $error = $exception->getMessage().' - line - '.$exception->getLine();
            return view('frontend.errors.error_500',compact('error'));
        }

    }

}
