<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $checkEmail = User::where('email',$request->email)->first();

        if($checkEmail) {
            
            $checkStatus = User::where('email',$request->email)->first();

            if($checkStatus->status == 0){

                $notification = array(
                    'message' => 'Your Account Is Deactive Contact To Admin',
                    'alert-type' => 'error'
                );
    
                return redirect(route('login'))->with($notification);

            }
            else{


                $remember_me = $request->has('remember_me') ? true : false;
                if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => '1'], $remember_me)){
                    if((auth()->user()->role->slug == 'admin')){
                        
                
                        return redirect(route('admin.dashboard'));
                
                }else{
                        return redirect(route('user.dashboard'));

                    }

                }else{
                    $notification = array(
                        'message' => 'kindly provide correct email/password',
                        'alert-type' => 'error'
                    );
                    return redirect(route('login'))->with($notification);
                }
            }
        }
        else{

            $notification = array(
                'message' => 'User Not Found',
                'alert-type' => 'error'
            );

            return redirect(route('login'))->with($notification);
    }

    }
}
