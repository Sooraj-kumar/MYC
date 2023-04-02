<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

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
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo(){
        if(Auth()->user()->status == 'Active'){
            if(Auth()->user()->role == 'User'){
                return route('user.dashboard');
            }
            elseif(Auth()->user()->role == 'Admin') {
                return route('admin.dashboard');
            }    
        }
        
        
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request){
        $input = $request->all();
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt(array('email'=>$input['email'],'password'=>$input['password']))){
            
            if(auth()->user()->role == 'Admin'){
                return redirect()->route('admin.dashboard');
            }
            elseif(auth()->user()->role == 'User'){
                return redirect()->route('user.dashboard');
            }
            return redirect()->route('login')->with('error','Access Denied');
            
            
        }
        else{
            return redirect()->back()->with('error','Email or Password are incorrect');
        }

    }

}




