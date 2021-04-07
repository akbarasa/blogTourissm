<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\MessageBag;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected function login(Request $request)
    {
        $errors = new MessageBag;

        $user = User::where("email",'=',$request->email)->get();   

        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt([
            'email' =>$email,
            'password'=>$password,
            'role' => $request->role,
            ]
        ) && $request->role == $user[0]->role){

           return redirect('/home');
        }else{
            return redirect()->back()->withErrors(["role" => "Role didnt match!"]);
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
