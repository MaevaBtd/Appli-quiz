<?php

namespace App\Http\Controllers;


use \Illuminate\Http\Request;
use \DB;
use \App\Models\Quiz;

class QuizController extends Controller {

    public function quiz($id){

        // Récupère le quiz qui correspond à l'id courant
        $quiz = Quiz::find($id);
      
        // Méthode pour donner les datas à la vue
        return view('quiz', [
            'quiz' => $quiz,
        ]);
    }

    public function quizPost(Request $request){
        $goodAnswer = Answer::where('answer_id')
    }
}