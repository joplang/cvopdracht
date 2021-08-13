<?php require 'views/partials/header.view.php' ?>

<section>
    <div class="container">
        <?php foreach ($vars['educations'] as $education) : ?>
            <div class="card">
                <div class="row">
                    <div class="col-4"><?= $education->name ?></div>
                    <div class="col-4"><a href="/educations/<?= $education->id ?>/edit"> <button>edit!</button> </a></div>
                    <div class="col-4"><a href="/educations/<?= $education->id ?>/delete"> <button>verwijder!</button> </a></div>
                </div>
            <?php endforeach ?>
            <a href="/educations/create"> <button>Voeg een opleiding toe!</button> </a>
            </div>
    </div>
</section>


<?php require 'views/partials/footer.view.php' ?>