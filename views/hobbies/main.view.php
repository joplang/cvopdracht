<?php require 'views/partials/header.view.php' ?>

<section>
    <?php foreach ($vars['hobbies'] as $hobby) : ?>
        <div>
            <?= $hobby->name ?>
            <a href="/hobbies/<?= $hobby->id ?>/edit"> <button>edit!</button> </a>
            <a href="/hobbies/<?= $hobby->id ?>/delete"> <button>verwijder!</button> </a>

        </div>

    <?php endforeach ?>

    <a href="/hobbies/create"> <button>Voeg een hobby toe!</button> </a>
</section>



<?php require 'views/partials/footer.view.php' ?>