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

    public function quizPost($id, Request $request) { 
        // On récupère toutes les réponses données qui sont les valeurs de la value de l'input pour chaque
        $userAnswers = $request->all();    
        

        // On récupère les bonnes réponses pour chaque question du quiz
        $quiz = Quiz::find($id);
        $questions = $quiz->questions;
        $idGoodAnswers = [];
        foreach ($questions as $question){
            $idGoodAnswers[] = $question->answers_id;
        }
        
        // On Compare les réponses données aux bonnes réponses correspondantes
        $score = 0;
        $count = 0;
        $color = [];
        foreach($userAnswers as $answer) {
            if($answer == $idGoodAnswers[$count]) {
                $score += 1;
                $color [] = 'green';
            }else{
                $color [] = 'red';
            }
            
            $count +=1;
        }

        
        // On assigne à chaque question la valeur de la réponse pour la passer à la vue, avec la bonne réponse si la réponse donnée est fausse
        //dump($goodAnswer);
        
        return view('quiz', [
            'quiz' => $quiz,
            'userAnswers' => $userAnswers,
            'idGoodAnswers' => $idGoodAnswers,
            'score' => $score
            
        ]);
    }
}
