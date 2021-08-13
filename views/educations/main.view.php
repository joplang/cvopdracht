<?php require 'views/partials/header.view.php' ?>

<section>
    <div class="container">
        <?php foreach ($vars['educations'] as $education) : ?>
            <div class="card">
                <?= $education->name ?>
                <a href="/educations/<?= $education->id ?>/edit"> <button>edit!</button> </a>
                <a href="/educations/<?= $education->id ?>/delete"> <button>verwijder!</button> </a>


            <?php endforeach ?>
            </div>
            <a href="/educations/create"> <button>Voeg een opleiding toe!</button> </a>
    </div>
</section>


<?php require 'views/partials/footer.view.php' ?>