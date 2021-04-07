<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class AuthController extends Controller
{
    //
    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $role = $request->role;

        if(Auth::attempt([
            'email' =>$email,
            'password'=>$password,
            'role' => $role,
            ]
        ) && Auth::User->role() == $role ){
            return redirect('/home');
        }
        else{
            return back();
        }
    }

}
