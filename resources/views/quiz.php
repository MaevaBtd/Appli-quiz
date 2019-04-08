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

<form action="<?= route('quizPost') ?>" method="POST">

    <div class="row">
        <?php foreach($quiz->questions as $question) : ?>
        <div class="col question col-4">

            <span class="level level--<?= $question->level->id ?>"><?= $question->level->name ?></span>


            <div class="question__question">
                <?= $question->question ?>
            </div>

            <?php if(\App\Utils\UserSession::isConnected()) : ?>
            <div class="question__choices">
                <?php foreach($question->answers as $answer) : ?>

                <div>
                    <input type="radio" name="exampleRadios<?= $question->id ?>" id="exampleRadios" value="option">
                    <label for="exampleRadios">
                        <?= $answer->description ?>
                    </label>
                </div>

                <!-- https://developer.mozilla.org/fr/docs/Web/HTML/Element/Input/radio -->

                <?php endforeach ?>
            </div>
            <?php endif ?>

        </div>
        <?php endforeach; ?>

        <?php if(\App\Utils\UserSession::isConnected()):?>
        <div>
            <input class="btn" type="submit" onmouseenter="playAudio()" onmouseout="stopAudio() value=" OK" />
        </div>
        <audio id="audioID">
            <source src="http://www.thequiz-addict.dx.am/music/kamoulox.wav" type="audio/mpeg">
        </audio>
        <?php endif ?>

    </div>
</form>
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

<?php require __DIR__.'/layout/footer.php' ?><div class="row">
