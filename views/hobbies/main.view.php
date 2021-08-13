<?php require 'views/partials/header.view.php' ?>

<section>
    <div class="container">
        <?php foreach ($vars['hobbies'] as $hobby) : ?>
            <div class="card">
                <div class="row">
                    <div class="col-4"><?= $hobby->name ?></div>
                    <div class="col-4"><a href="/hobbies/<?= $hobby->id ?>/edit"> <button>edit!</button> </a></div>
                    <div class="col-4"><a href="/hobbies/<?= $hobby->id ?>/delete"> <button>verwijder!</button> </a></div>
                </div>
            <?php endforeach ?>
            </div>
            <a href="/hobbies/create"> <button>Voeg een hobby toe!</button> </a>
    </div>
</section>



<?php require 'views/partials/footer.view.php' ?>