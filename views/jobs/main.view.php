<?php require 'views/partials/header.view.php' ?>

<section>
    <div class="container p-2">
        <?php foreach ($vars['jobs'] as $job) : ?>
            <div class="card">
                <div class="row p-2">
                    <div class="col-4"><b><?= $job->name ?></b></div>
                    <div class="col-4"><a href="/jobs/<?= $job->id ?>/edit"> <button>edit!</button> </a></div>
                    <div class="col-4"><a href="/jobs/<?= $job->id ?>/delete"> <button>verwijder!</button> </a></div>
                </div>
            <?php endforeach ?>
            <div class="row align-self-center p-2">
                <a href="/jobs/create"> <button>Voeg een baan toe!</button> </a>
            </div>
            </div>

    </div>
</section>


<?php require 'views/partials/footer.view.php' ?>