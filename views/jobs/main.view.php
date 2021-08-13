<?php require 'views/partials/header.view.php' ?>

<section>
    <div class="container">
        <?php foreach ($vars['jobs'] as $job) : ?>
            <div class="card">
                <div class="row">
                    <div class="col-4"><?= $job->name ?></div>
                    <div class="col-4"><a href="/jobs/<?= $job->id ?>/edit"> <button>edit!</button> </a></div>
                    <div class="col-4"><a href="/jobs/<?= $job->id ?>/delete"> <button>verwijder!</button> </a></div>
                </div>
            <?php endforeach ?>
            <a href="/jobs/create"> <button>Voeg een baan toe!</button> </a>
            </div>

    </div>
</section>


<?php require 'views/partials/footer.view.php' ?>