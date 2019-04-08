
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <!-- Bootstrap css load -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Reset CSS -->
        <link href="<?= url('assets/css/reset.css') ?>"  rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- Really beautiful CSS -->
        <link href="<?= url('assets/css/style.css') ?>"  rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
        
        <title>O'Quiz</title>
    </head>
    <body>
        <main class="container">

            <nav>

                <ul>
                    <li>
                        <a href="<?= route('home'); ?>">
                        <h1><img src="https://cdn2.scratch.mit.edu/get_image/gallery/1204086_200x130.png"></h1>
                        </a>
                    </li>
                </ul>

                <ul class="d-flex">
                    <li>
                        <a href="<?= route('home'); ?>">
                            
                            Accueil
                        </a>
                    </li>

                    <?php if(!\App\Utils\UserSession::isConnected()) : ?>
                    
                    <li>
                        <a href="<?= route('signup');?>">
                            
                            Inscription
                        </a>
                    </li>
                    <li>
                        <a href="<?= route('signin'); ?>">
                            
                            Connexion
                        </a>
                    </li>
                    <?php endif; ?>

                    <li>
                        <a href="<?= route('tags'); ?>">Sujets</a>
                    </li>
                    <?php if(\App\Utils\UserSession::isConnected()) : ?>
                    <li>
                        <a href="<?= route('profile'); ?>">Profil</a>
                    </li>
                    
                    <li>
                        <a href="<?= route('logout'); ?>">Deconnexion</a>
                    </li>
                    <?php endif; ?> 

                </ul>
            </nav>