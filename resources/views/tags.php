<?php include __DIR__.'/layout/header.php'; ?>
<h2>Themes</h2>
<div class="row">

    

    <?php foreach($tags as $tag): ?>
    <a href="<?=route('quiz-tag', ['id' => $tag->id]);?>" class="col-4 quiz-card" onmouseenter="playAudio()">
        <audio id="audioID">
            <source src="https://www.cjoint.com/doc/17_04/GDBo22CpPLB_Denis-Brogniart-AH.mp3">
        </audio>

        <h3><?= $tag->name ?></h3>

    </a>

    <?php endforeach ?>

</div>
</main>
</div>

<?php require __DIR__.'/layout/footer.php'; ?>