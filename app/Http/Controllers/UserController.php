<?php

namespace App\Http\Controllers;


use \Illuminate\Http\Request;
use \DB;
use \App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Utils\UserSession;
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
        return view('signin', [
            'viewVars' => ''
        ]);
    }
    
    public function signinPost(Request $request) {
        $viewVars = []; 

        $user = User::where('email', $request->input('email'))->first();
        // Si j'ai trouvé un user 
        if (!empty($user)) {
            // je vérifie le pw
            $match = password_verify($request->input('password'), $user->password);
            // si le mot de passe correspond
            if ($match) {
                UserSession::connect($user);
                return redirect()->route('profile');
            }
        }

        $viewVars['errors'] = 'Identifiants incorrects';
        $viewVars['formValues'] = ['email' => $request->input('email')];

        return view('signin', ['viewVars' => $viewVars]);
    }

    public function logout() {
        UserSession::disconnect();
        return redirect()->route('home');
    }

    public function profile() {
        $user = UserSession::getUser();
        return view('profile', ['user' => $user]);
        
    }
}
