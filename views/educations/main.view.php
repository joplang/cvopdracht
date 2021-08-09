<?php require 'views/partials/header.view.php' ?>

<section>
    <?php foreach ($vars['educations'] as $education) : ?>
        <div>
            <?= $education->name ?>
            <a href="/educations/<?= $education->id ?>/edit"> <button>edit!</button> </a>
            <a href="/educations/<?= $education->id ?>/delete"> <button>verwijder!</button> </a>
        </div>

    <?php endforeach ?>

    <a href="/educations/create"> <button>Voeg een opleiding toe!</button> </a>
</section>


<?php require 'views/partials/footer.view.php' ?>