<?php include __DIR__.'/layout/header.php' ?>
        
    <div class="profile">
        <h2>Bienvenue <?= $user->firstname.'  '.$user->lastname ?></h2>
        <h3>Votre email est : <?= $user->email?></h3>
        <h2>êtes vous prêt à résoudre nos quizzes putrides ?</p>
           <h5 class="far fa-heart">Votre photo</h5>
            <div class="pic">
                <img src="https://www.brain-magazine.fr/m/posts/25817/max/bdcV0.jpg" alt="profil-pic">
            </div>            
    </div>

<?php require __DIR__.'/layout/footer.php'; ?>