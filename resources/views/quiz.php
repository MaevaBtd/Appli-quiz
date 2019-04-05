<?php include __DIR__.'/layout/header.php'; ?>


<div>
    <h2> <?= $quiz->title ?>
        <span><?= count($quiz->questions) ?>questions</span>
    </h2>
</div>

<div>
    <h4>
        <?= $quiz->description ?>
    </h4>
</div>

<div>
    <p><?= $quiz->author->firstname.' '.$quiz->author->lastname; ?></p>
</div>

<div>
    <ul>
    <?php foreach($quiz->tags as $tag): ?>
        <li><?= $tag->name ?></li>
    <?php endforeach ?>
    </ul>
</div>

<div class="row">


    <?php foreach($quiz->questions as $question) : ?>
    <div class="col question col-4">

        <span class="level level--<?= $question->level->id ?>"><?= $question->level->name ?> </span>
        

        <div class="question__question">
            <?= $question->question ?>
        </div>
       
    </div>
    <?php endforeach; ?>





</div>
</main>

<template>
<div>

<ul>
    <?php foreach($question->answers as $answer): ?>  
                <li><?=$answer->description ; ?></li>
    <?php endforeach ?>
</ul>
</div>
</template>

<?php require __DIR__.'/layout/footer.php' ?>