<?php require 'views/partials/header.view.php' ?>

<section>
    <div class="container">
        <?php foreach ($vars['hobbies'] as $hobby) : ?>
            <div class="card">
                <?= $hobby->name ?>
                <a href="/hobbies/<?= $hobby->id ?>/edit"> <button>edit!</button> </a>
                <a href="/hobbies/<?= $hobby->id ?>/delete"> <button>verwijder!</button> </a>

            <?php endforeach ?>
            </div>
            <a href="/hobbies/create"> <button>Voeg een hobby toe!</button> </a>
    </div>
</section>



<?php require 'views/partials/footer.view.php' ?>