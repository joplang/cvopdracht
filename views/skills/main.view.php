<?php require 'views/partials/header.view.php' ?>

<section>
    <div class="container p-2">
        <?php foreach ($vars['skills'] as $skill) : ?>
            <div class="card">
                <div class="row p-2">
                    <div class="col-4"><b><?= $skill->name ?></b></div>
                    <div class="col-4"><a href="/skills/<?= $skill->id ?>/edit"> <button>edit!</button> </a></div>
                    <div class="col-4"><a href="/skills/<?= $skill->id ?>/delete"> <button>verwijder!</button> </a></div>
                </div>
            <?php endforeach ?>
            <div class="row align-self-center p-2">
                <a href="/skills/create"> <button>Voeg een vaardigheid toe!</button> </a>
            </div>
            </div>

    </div>
</section>



<?php require 'views/partials/footer.view.php' ?>