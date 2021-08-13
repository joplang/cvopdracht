<?php require 'views/partials/header.view.php' ?>

<section>
    <div class="container">
        <?php foreach ($vars['skills'] as $skill) : ?>
            <div class="card">
                <?= $skill->name ?>
                <a href="/skills/<?= $skill->id ?>/edit"> <button>edit!</button> </a>
                <a href="/skills/<?= $skill->id ?>/delete"> <button>verwijder!</button> </a>
            <?php endforeach ?>
            <a href="/skills/create"> <button>Voeg een vaardigheid toe!</button> </a>
            </div>

    </div>
</section>



<?php require 'views/partials/footer.view.php' ?>