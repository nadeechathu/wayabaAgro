<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Customer;
use App\Models\Permission;
use App\Models\RecaptchaChecker;
use App\Models\EmailSender;
use App\Models\Admin\UserPermission;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        /* dd($data); */
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'digits:10'],
            'g-recaptcha-response' => 'required'
            /* 'dob' => ['required'], */
        ],
        [
            "g-recaptcha-response.required" => "Please mark reCAPTCHA security checks and try again"
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */


     public function showRegistrationForm()
    {
        
        return redirect('/');
    }


    protected function create(array $data)
    {
        

        $recaptchaCheckResponse = RecaptchaChecker::checkRecaptchaVaidity($data['g-recaptcha-response']);

        if(!$recaptchaCheckResponse['success']){

            return back()->with('error','Please mark the recaptcha security checks');
        }

        $user = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone' => $data['phone'],
            'username' => $data['email'],
            /* 'dob' => $data['dob'], */
            'status' => User::ACTIVE,
            'role_id' => 2,
        ]);

        $customer = new Customer;

        $customer->first_name = $data['first_name'];
        $customer->last_name =  $data['last_name'];
        $customer->email = $data['email'];
        $customer->phone = $data['phone'];
        $customer->address = null;
        $customer->user_id = $user->id;
    
        Customer::create($customer->toArray());

        EmailSender::sendRegistrationEmail($user->id, true);
        

        return $user;
    }
}
