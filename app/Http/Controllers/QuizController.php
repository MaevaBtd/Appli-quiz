<?php

namespace App\Http\Controllers;


use \Illuminate\Http\Request;
use \DB;
// use \App\Models\Videogame;
// use \App\Models\Platform;

class QuizController extends Controller {

    public function quiz(){
        return view('quiz');
    }

    public function quizPost(){
        
    }
}