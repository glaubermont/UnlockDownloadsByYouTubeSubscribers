<?php

namespace App\Http\Controllers\Auth;

use Redirect;
use Mail;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/backingtracks'; // fazer menu com link backing tracks vip
	
	
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
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
         $email_code = bcrypt($data['email'].microtime());
         $email_code = str_replace('/', '*', $email_code);

         if(
            User::insert([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'v_token' => $email_code
        ])
     ){
                 
                 //Mail
             $mData = array();
             $mData['name'] =  $data['name'];
             $mData['email'] = $data['email'];
             $mData['email_code'] = $email_code;
 
             Mail::send('mails.registerUserMail',['data'=>$mData],function($mail) use ($mData){
                $mail->to($mData['email'],$mData['name'])->from("btguitarplay@gmail.com")->subject("Activate Your Account");
             });
          //Mail 
                return Redirect::back()->withErrors(['Registration Successfull!!! We have sent you a activation email please activate your account before login. Check your spam box too. Thanks']);

         }else{
              
               return Redirect::back()->withErrors(['Somthing went wrong please try again']);

         };
    }
    public function activateUser($token){
          $user = User::where('v_token',$token)->first();
          if($user){
            if($user->status==0){
                 User::where('v_token',$token)->update(['status'=>1]);
                 return redirect('/login')->withErrors(['Congratulation user account has been activated successfully.You are able to login now.']);  
            }else{
              return redirect('/login')->withErrors(['Your account is already activated.']);
            }
          }else{
             return redirect('/register')->withErrors(['Something went wrong...if you have not register yet please register yourself']);
          }
    }
       
}
