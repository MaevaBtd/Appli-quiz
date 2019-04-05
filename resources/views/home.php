<?php include __DIR__.'/layout/header.php' ?>
        
            <div class="intro">
                <h2> Bienvenue sur O'Quiz </h2>
                <p>O'Quiz est une plateforme de quiz, vous trouverez ci-dessous l'ensemble des quiz disponible.</p>
                <p>Pour une expérience optimale, n'hésitez pas à créer un compte afin de garder une trace de vos résultats !</p>
            </div>

            
            <br>
            <br>

            <div class="row">

               <?php foreach($quizzes as $quiz): ?>
                    <a href="<?=route('quiz', ['id' => $quiz->id]);?>" class="col-4 quiz-card" onmouseenter="playAudio()">
                    <audio id="audioID">
                    <source src="https://www.cjoint.com/doc/17_04/GDBo22CpPLB_Denis-Brogniart-AH.mp3">
                    </audio>
                
                    
                        <h3><?= $quiz->title ?></h3>
                        <h5><?= $quiz->description ?></h5>
                        <p><?= $quiz->firstname .' '. $quiz->lastname?></p>
                       
                    </a>

               <?php endforeach ?>

            </div>
        </main>
    </div>
<?php require __DIR__.'/layout/footer.php'; ?>

