<?php

namespace App\Http\Controllers;


use \Illuminate\Http\Request;
use \DB;
// use \App\Models\Videogame;
// use \App\Models\Platform;

class UserController extends Controller {
    //
    public function signup() {
        return view('signup');            
    }

    public function signupPost() {
        
    }

    public function signin() {
        return view('signin');
    }

    public function signinPost() {
        
    }

    public function logout() {
        
    }

    public function profile() {
        
    }
}