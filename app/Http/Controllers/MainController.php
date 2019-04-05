<?php

namespace App\Http\Controllers;


use \Illuminate\Http\Request;
use \DB;
use App\Models\Quiz; 
use App\Models\User;

class MainController extends Controller {

    public function home() {

        $quizzes = Quiz::all();

        $users = User::all();

        return view('home', [
            'pageTitle' => 'Accueil',
            'quizzes' => $quizzes,
            'users' => $users
        ]);
    }

}
