<?php require 'views/partials/header.view.php' ?>

<section>
    <div class="container">
        <?php foreach ($vars['jobs'] as $job) : ?>
            <div class="card">
                <?= $job->name ?>
                <a href="/jobs/<?= $job->id ?>/edit"> <button>edit!</button> </a>
                <a href="/jobs/<?= $job->id ?>/delete"> <button>verwijder!</button> </a>
            <?php endforeach ?>
            <a href="/jobs/create"> <button>Voeg een baan toe!</button> </a>
            </div>

    </div>
</section>


<?php require 'views/partials/footer.view.php' ?>