
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <!-- Bootstrap css load -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Reset CSS -->
        <link href="<?= url('assets/css/reset.css') ?>"  rel="stylesheet">
        
        <!-- Really beautiful CSS -->
        <link href="<?= url('assets/css/style.css') ?>"  rel="stylesheet">

        <title>O'Quiz</title>
    </head>
    <body>
        <main class="container">

            <nav>

                <ul>
                    <li>
                        <a href="<?= route('home'); ?>">
                        <h1>O'Quiz</h1>
                        </a>
                    </li>
                </ul>

                <ul>
                    <li>
                        <a href="<?= route('home'); ?>">
                            <i></i>
                            Accueil
                        </a>
                    </li>

                    <li>
                        <a href="<?= route('signup');?>">
                            <i></i>
                            Inscription
                        </a>
                    </li>

                    <li>
                        <a href="<?= route('signin'); ?>">
                            <i></i>
                            Connexion
                        </a>
                    </li>

                </ul>
            </nav>