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

        // $firstname = $request->input('firstname');
        // $lastname = $request->input('lastname');
        // $mail = $request->input('email');
        // $password = $request->input('password');

        $input = $request->all();

        // dump($input);
        // die;

        // $input = $request->only(['firstname', 'lastname', 'email', 'password']);
        // $arrayError = [];

        // if (empty($input['email'])){
        //     $arrayError[] = User::NO_EMAIL;
        // }

        // elseif (empty($input['firstname'])){
        //     $arrayError[] = User::NO_FIRSTNAME;
        // }

        // elseif (empty($input['lastname'])){
        //     $arrayError[] = User::NO_LASTNAME;
        
        // }

        // elseif (empty($input['password'])){
        //     $arrayError[] = User::NO_PASSWORD;
        // }

        // dump($arrayError);
        // die;

        // elseif (array_sum($arrayError) == 0){
            
             User::insert([
                
                 'email' => $input['email'], 
                 'firstname' => $input['firstname'], 
                 'lastname' => $input['lastname'], 
                 'password' => Hash::make($input['password'])
                 ]);
                  //Hash::check(password)
                
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

/*
    if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
            $password = test_input($_POST["password"]);
            $cpassword = test_input($_POST["cpassword"]);
            if (strlen($_POST["password"]) <= '8') {
                $passwordErr = "Your Password Must Contain At Least 8 Characters!";
                route('signup', ['message' => $passwordErr]);
            }
            elseif(!preg_match("#[0-9]+#",$password)) {
                $passwordErr = "Your Password Must Contain At Least 1 Number!";
            }
            elseif(!preg_match("#[A-Z]+#",$password)) {
                $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
            }
            elseif(!preg_match("#[a-z]+#",$password)) {
                $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
            }
            }
            elseif(!empty($_POST["password"])) {
                $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
            } else {
                $passwordErr = "Please enter password   ";
            }

*/