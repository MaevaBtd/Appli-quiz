<?php

namespace App\Http\Controllers;


use \Illuminate\Http\Request;
use \DB;
use \App\Models\Quiz;
use \App\Models\Question;
use \App\Models\Level;
use \App\Models\User;

class QuizController extends Controller {

    public function quiz($id){

        // Récupère le quiz qui correspond à l'id courant
        $quiz = Quiz::find($id);
        // Récupère tous les niveaux
        $levels = Level::all();
        // Récupère l'auteur qui correspond à l'id de l'auteur du quiz
        $quizAuthor = User::find($quiz->app_users_id);
        // Récupère les questions qui correspondent à l'id du quiz
        $questions = Question::where('quizzes_id', $id)->get();
        
        // Boucle pour récupérer les réponses de chaque question
        foreach ($questions as $currentQuestion) {
            $currentAnswersList[] = $currentQuestion->answers;
        }
        // Récupère les tags pour le quiz
        $tags = $quiz->tags;
        dump($tags);

        // Méthode pour donner les datas à la vue
        return view('quiz', [
            'quiz' => $quiz,
            'questions' => $questions,
            'levels' => $levels,
            'author' => $quizAuthor,
            'answers' => $currentAnswersList,
            'tags' => $tags
        ]);
    }

    public function quizPost(){

    }
}