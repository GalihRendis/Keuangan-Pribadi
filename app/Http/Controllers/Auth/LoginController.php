<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function viewLogin(){
        // dd('cel');
        if(Auth::check()){
            return redirect()->route('SI.dashboard');
        }
        return view('SI.login');
    }

    public function attemptLogin(Request $request){

        $credentials = $request->only('email', 'password', 'remember');

        if(Auth::attempt([
            'email' => $credentials['email'] ?? null,
            'password' => $credentials['password'] ?? null],
            !empty($credentials['remember']))){

                return redirect()->route('SI.dashboard');
            // return redirect()->intended('/home');
        }
        return redirect()->back()->withInput()
        ->with('error','Email-Address Or Password Are Wrong.');
    }

    public function attemptRegister(Request $request){
        // $request->validate([
        //     'name' => ['required'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8','confirmed', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'],
        // ]);
        $v = Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8','confirmed', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'],
        ]);

        if ($v->fails())
        {
            // dd($v->errors());
            return redirect()->back()->withErrors($v->errors());
        }
          // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if(Auth::attempt([
            'email' => $request->email ?? null,
            'password' => $request->password ?? null])){

            return redirect()->route('SI.dashboard');
        }
        return redirect()->route('register.index')
        ->with('error','Email-Address Or Password Are Wrong.');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('login.index');
    }

    public function viewRegister() {
        if(Auth::check()){
            return redirect()->route('SI.dashboard');
        }
        return view('SI.register');
    }
}
