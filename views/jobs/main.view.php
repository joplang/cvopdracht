<?php require 'views/partials/header.view.php' ?>

<section>
    <?php foreach ($vars['jobs'] as $job) : ?>
        <div>
            <?= $job->name ?>
            <a href="/jobs/<?= $job->id ?>/edit"> <button>edit!</button> </a>
            <a href="/jobs/<?= $job->id ?>/delete"> <button>verwijder!</button> </a>

        </div>

    <?php endforeach ?>

    <a href="/jobs/create"> <button>Voeg een baan toe!</button> </a>
</section>


<?php require 'views/partials/footer.view.php' ?>