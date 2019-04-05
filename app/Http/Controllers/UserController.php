<?php

namespace App\Http\Controllers;


use \Illuminate\Http\Request;
use \DB;
use \App\Models\User;
use Illuminate\Support\Facades\Hash;
// use \App\Models\Videogame;
// use \App\Models\Platform;

class UserController extends Controller {
    //
    public function signup() {
        return view('signup');            
    }
    
    public function signupPost(Request $request) {

        $input = $request->all();

        $arrayErrors = [];
        foreach ($input as $key => $value) {
            if (empty($value)) {
                $arrayErrors[] = $key . ' is not defined';
            }
        }
        if (!empty($arrayErrors)) {
            return view('signup', [
                'errors' => $arrayErrors
            ]);
        }
        
        
        User::insert([               
            'email' => $input['email'], 
            'firstname' => $input['firstname'], 
            'lastname' => $input['lastname'], 
            'password' => Hash::make($input['password'])
        ]);
            
        return redirect()->route('signin');
    }                                         
        
            
    public function signin() {
        return view('signin');
    }
    
    public function signinPost(Request $request) {
        
    }
    
    public function logout() {
        
    }

    public function profile() {
        
    }
}
