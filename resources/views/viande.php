<?php include __DIR__.'/layout/header.php' ?>
        
            <div class="intro">
                <h2> Bienvenue sur O'Quiz </h2>
                <p>O'Quiz est une plateforme de quiz, vous trouverez ci-dessous l'ensemble des quiz disponible.</p>
                <p>Pour une expérience optimale, n'hésitez pas à créer un compte afin de garder une trace de vos résultats !</p>
            </div>

            
            <br>
            <br>

            <div class="row">

               <?php foreach($tag->quizzes as $quiz): ?>
                    <a href="<?=route('quiz', ['id' => $quiz->id]);?>" class="col-4 quiz-card" onmouseenter="playAudio()">
                    <audio id="audioID">
                    <source src="http://www.thequiz-addict.dx.am/music/viande2.wav">
                    </audio>
                
                    
                        <h3><?= $quiz->title ?></h3>
                        <h5><?= $quiz->description ?></h5>
                        <p><?= $users->firstWhere('id', $quiz->app_users_id)->firstname .' '. $users->firstWhere('id', $quiz->app_users_id)->lastname?></p>
                       
                    </a>

               <?php endforeach ?>

            </div>
        </main>
    </div>
<?php require __DIR__.'/layout/footer.php'; ?>