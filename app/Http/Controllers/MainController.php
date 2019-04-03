<?php

namespace App\Http\Controllers;


use \Illuminate\Http\Request;
use \DB;
use App\Models\Quiz; 

class MainController extends Controller {

    public function home() {

        $quizzes = Quiz::all();

        

        return view('home', [
            'pageTitle' => 'Accueil',
            'quizzes' => $quizzes
        ]);
    }
}
