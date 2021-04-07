<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function viewUser(){
    	$user = User::all();

    	return view('user', ['user'=>$user]);
    }

    public function updateProfile($id){
    	$user = User::find($id);

    	return view('profile', ['user' => $user]);
    }

    public function update(Request $req){
    	$req->validate([
    		'name'=> 'unique:users',
    		'email' => 'email|unique:users',
    		'phone' => 'numeric|digits_between:8,12'
    	]);

    	User::where('id', $req->id)->update([
    		'name' => $req->name,
    		'email' => $req->email,
    		'phone' => $req->phone
    	]);

    	return redirect()->back();
    }

    public function deleteUser($id){
    	$user = User::find($id);
    	$user->delete();

    	return redirect()->to('user');
    }
}
