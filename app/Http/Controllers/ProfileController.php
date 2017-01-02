<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function profile($username){


	//$user = User::whereUsername($username)->first();
	$user = User::where('username', '=', $username)->first();
	return view('user.profile',compact('user'));
    }

    public function allusers(){
   // $users = User::all();
    $users = User::orderBy('name', 'asc')->get();
    return view('user.allusers',compact('users'));
    }
}
