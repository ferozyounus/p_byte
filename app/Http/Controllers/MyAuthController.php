<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
//use Cartalyst\Stripe\Stripe;
//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Crypt;
use Session;

use DB;
use Str;
use Auth;
use App\DiscountCoupons;
use App\EventPackage;
use App\Traits\EmailTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\VerificationCode;
use Mail;
class MyAuthController extends Controller
{
    use EmailTrait;

   
public function otp(){
    $data['title'] = "OTP";
    return view('auth.otp', $data);
}


public function forgot(){
    $data['title'] = "Forgot Password";
    return view('auth.forgot', $data);
}


public function forgot_password(Request $request){
   
    $request->validate([
        'email' => ['required', 'string', 'email', 'max:255'],
       ]);

       $validate = User::where('email', $request->email)->first();

       if($validate){
       
        DB::table('verification_codes')->where('user_id',$validate->id)->delete();


        $verificationCode = rand(100000, 999999);
        VerificationCode::create([
            'verification_code' => $verificationCode, 
            'verification_type' => 'email',
            'user_id' => $validate->id, ]);

       $data = [           
            'full_name' => $validate->name, 
            'email' => $validate->email, 
            'verificationcode' => $verificationCode, 
            'url' => url('').'/'.'verify-account/' . Crypt::encrypt($validate->id), 
            'subject' => 'Email Verification',
            'user_id'=>$validate->id,
            ];

        $userEmail = $validate->email;
        $emailSubject = 'Reset Password';

        Mail::send('email.resetpassword', $data, function($message) use ($userEmail,$emailSubject)
        {
            $message->to($userEmail)->subject($emailSubject);
        });

        return redirect('verify-account/' . Crypt::encrypt($validate->id))->with('success', 'Please verify your account');

       }
       else{
        
        $notification = array(
            'message' => 'Email Not Found',
            'alert-type' => 'error',
            'status' => 500
        );

        return redirect()->back()->with($notification);
       }

      
}



    public function store(Request $request)
    {
  
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string','confirmed', 'min:6'],

        ]);

        try {
           
            DB::beginTransaction();
            $user = new User;
           
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
           
            $verificationCode = rand(100000, 999999);
            VerificationCode::create([
                'verification_code' => $verificationCode, 
                'verification_type' => 'email',
                'user_id' => $user->id, ]);

                $userEmail = $user->email;
                $emailSubject = 'Verification Code';
                $data = [
                    'verificationcode' => $verificationCode, 
                    'subject'=>$emailSubject];
            
            Mail::send('email.useremail', $data, function($message) use ($userEmail,$emailSubject)
            {
                $message->to($userEmail)->subject($emailSubject);
            });

            DB::commit();
            return redirect('verify-account/' . Crypt::encrypt($user->id))->with('success', 'Please verify your account');
        } catch (\Throwable $th) {
            DB::rollback();
            
            $notification = array(
                'message' => 'Some error occured : '.$th->getMessage(),
                'alert-type' => 'error',
                'status' => 500
            );
            $redirect = 'register';
        }
        return redirect()->route('register')->with($notification);
    }
    

    
    public function registration_resend_code($user_id) {
        $validate = User::where('id', Crypt::decrypt($user_id))->first();
    

        if($validate){
       
            DB::table('verification_codes')->where('user_id',$validate->id)->delete();
    
    
            $verificationCode = rand(100000, 999999);
            VerificationCode::create([
                'verification_code' => $verificationCode, 
                'verification_type' => 'email',
                'user_id' => $validate->id, ]);
    
           $data = [           
                'full_name' => $validate->name, 
                'email' => $validate->email, 
                'verificationcode' => $verificationCode, 
                'url' => url('').'/'.'verify-account/' . Crypt::encrypt($validate->id), 
                'subject' => 'Email Verification',
                'user_id'=>$validate->id,
                ];
    
            $userEmail = $validate->email;
            $emailSubject = 'Reset Password';
    
            Mail::send('email.resetpassword', $data, function($message) use ($userEmail,$emailSubject)
            {
                $message->to($userEmail)->subject($emailSubject);
            });
    
    
            return ['status' => 'success', ];
    
    
    
           }
           else{
            return ['status' => 'error', ];
           }

    }

    public function verifyAccountView($user_id) {
        $user = User::where('id', Crypt::decrypt($user_id))->first();
        $email = $user->email;
        if (Auth::Check()) {
           
        } else {
            $user_id = Crypt::decrypt($user_id);
            return view('auth.otp', compact('user_id', 'email'));
        }
    }
    

    public function verifyAccount(Request $request, $user_id) {
        $user_id = Crypt::decrypt($user_id);
      
        $verifyCode = $request->verifyCode;
       
        $validate = DB::table('verification_codes')->where('verification_code', intval($verifyCode))->first();
        if (!empty($validate)) {

            User::where('id', $user_id)->update(['status' => 1, 'is_email_verified' => 1]);
            DB::table('verification_codes')->where('verification_code', $verifyCode)->delete();
            Auth::loginUsingId($user_id, true);
            return ['status' => 'success', ];
        } else {
            return ['status' => 'error', ];
        }
    }

    
  
}
