<?php include __DIR__.'/layout/header.php'; ?>


<div>
    <h2> <?= $quiz->title ?>
        <span><?= count($questions) ?>questions</span>
    </h2>
</div>

<div>
    <h4>
        <?= $quiz->description ?>
    </h4>
</div>

<div>
    <p><?= $author->firstname.' '.$author->lastname; ?></p>
</div>

<div>
    <ul>
    <?php foreach($tags as $tag): ?>
        <li><?= $tag->name ?></li>
    <?php endforeach ?>
    </ul>
</div>

<div class="row">


    <?php foreach($questions as $question) : ?>
    <div class="col question col-4">

        <span class="level level--<?= $levels->firstWhere('id', $question->levels_id)->id ?>"><?= $levels->firstWhere('id', $question->levels_id)->name ?></span>

        <div class="question__question">
            <?= $question->question ?>
        </div>
        <div>

            <ul>
                <?php foreach($answers as $answer): ?>
                    <?php foreach($answer as $currentDescription) : ?>
                        <?php if($currentDescription->questions_id == $question->id) : ?>
                            <li><?= $currentDescription->description ?></li>
                        <?php endif ?>
                    <?php endforeach ?>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
    <?php endforeach; ?>





</div>
</main>

<?php require __DIR__.'/layout/footer.php' ?>