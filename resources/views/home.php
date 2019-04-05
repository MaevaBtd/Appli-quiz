<?php include __DIR__.'/layout/header.php' ?>
        
            <div class="intro">
                <h2> Bienvenue sur O'Quiz </h2>
                <p>O'Quiz est une plateforme de quiz, vous trouverez ci-dessous l'ensemble des quiz disponible.</p>
                <p>Pour une expérience optimale, n'hésitez pas à créer un compte afin de garder une trace de vos résultats !</p>
            </div>

            <div class="row">

               <?php foreach($quizzes as $quiz): ?>
                    <a href="<?= route('quiz'); ?>" class="col-4 quiz-card">

                        <h3><?= $quiz->title ?></h3>
                        <h5><?= $quiz->description ?></h5>
                        <p><?= $users->firstWhere('id', $quiz->app_users_id)->firstname .' '. $users->firstWhere('id', $quiz->app_users_id)->lastname?></p>
                       
                    </a>

               <?php endforeach ?>

            </div>
        </main>
</div>
 <?php require __DIR__.'/layout/footer.php'; ?>