<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->get('/', [
    'as' => 'home', 
    'uses' => 'MainController@home'
]);



$router->get('/quiz/{id}', [
    'as' => 'quiz',
    'uses' => 'QuizController@quiz'
]);

$router->post('/quiz/{id}',[
    'as' => 'quizPost',
    'uses' => 'QuizController@quizPost'
]);


$router->get('/signup', [
    'as' => 'UserController', 
    'uses' => 'UserController@signup'
]);

$router->post('/signup', [
    'as' => 'UserController', 
    'uses' => 'UserController@signupPost'
]);

$router->get('/signin', [
    'as' => 'signin',
    'uses', 'UserController@signin'
]);

$router->post('/signin', [
    'as' => 'UserController', 
    'uses' => 'UserController@signinPost'
]);

$router->get('/logout', [
    'as' => 'UserController',
    'uses' => 'UserController@logout'        
]);
$router->post('/account', [
    'as' => 'UserController', 
    'uses' => 'UserController@profile'
]);
$router->get('/tags', [
    'as' => 'TagController',
    'uses' => 'TagController@tags'        
]);

$router->get('/tags/[id]/quiz', [
    'as' => 'UserController', 
    'uses' => 'TagController@quiz'
]);



# Routes

// | URL | Titre | Description de la page | Méthode HTTP | Controller | Méthode | commentaire |
// |--|--|--|--|--|--|--|
// | `/` | Accueil | liste des quiz | GET | MainController | home |  |
// | `/quiz/[id]` | Quiz – Titre du quiz | quiz avec ses réponses | GET | QuizController | quiz |  |
// | `/quiz/[id]` | - | traitement du formulaire du quiz soumis et affichage des bonnes réponses, scores, etc. | POST | QuizController | quizPost |  |
// | `/signup` | Inscription | formulaire d'inscription | GET | UserController | signup |  |
// | `/signup` | - | Traitement du formulaire d'inscription | POST | UserController | signupPost |  |
// | `/signin` | Connexion | formulaire de connexion | GET | UserController | signin |  |
// | `/signin` | - | Traitement du formulaire de connexion | POST | UserController | signinPost |  |
// | `/logout` | - | Traitement de la déconnexion | GET | UserController | logout |  |
// | `/account` | Mon compte | Page profil de l'utilisateur connecté | GET | UserController | profile | Affiche uniquement les informations dont on dispose sur l'utilisateur connecté |
// | `/tags` | Sujets de quiz | liste des tags | GET | TagController | tags | Affiche la liste complète des tags |
// | `/tags/[id]/quiz` | Sujet – Nom du sujet | Liste des quiz pour le tag donné | GET | TagController | quiz | Affiche la liste des quiz relatifs à un tag |