<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Mail;
use Redirect;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasswordController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
	public function index(){
        return view('auth.passwords.reset');  
    }
    public function postForgotPassword(Request $request){
        $this->validate($request,[
          'email' => 'required|string|email'
        ]);

       $user =  User::where('email',$request->email)->first();
       $newPassword = rand(1,9999);

       if($user){
           if($user->status==1){

            if(
                User::where('email',$request->email)->update(['password'=>bcrypt($newPassword)])
            ){
            
            $email_code = bcrypt($user->email.microtime());
            $email_code = str_replace('/', '*', $email_code);

             //Mail
             $mData = array();
             $mData['name'] =  $user->name;
             $mData['password'] = $newPassword;
             $mData['email'] = $user->email;
             $mData['email_code'] = $email_code;
 
             Mail::send('mails.forgotUserPassword',['data'=>$mData],function($mail) use ($mData){
                $mail->to($mData['email'],$mData['name'])->from("btguitarplay@gmail.com")->subject("New Password");
             });
          //Mail
             return Redirect::back()->withErrors(['Password Reset Successfull!!! we have sent your new password to your email address.Check your spam box too.Thanks']);
            }else{
                 return Redirect::back()->withErrors(['Something went wrong please try again...']);
            } 
           }else{
              return Redirect::back()->withErrors(['You have not activate your account yet!!!']);
           }
       }else{
         return Redirect::back()->withErrors(['Unable to find user having this email \''.$request->email.'\'']);
       }
    }

}
