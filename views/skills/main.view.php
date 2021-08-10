<?php require 'views/partials/header.view.php' ?>

<section>
    <?php foreach ($vars['skills'] as $skill) : ?>
        <div>
            <?= $skill->name ?>
            <a href="/skills/<?= $skill->id ?>/edit"> <button>edit!</button> </a>
            <a href="/skills/<?= $skill->id ?>/delete"> <button>verwijder!</button> </a>

        </div>

    <?php endforeach ?>

    <a href="/skills/create"> <button>Voeg een vaardigheid toe!</button> </a>
</section>



<?php require 'views/partials/footer.view.php' ?>