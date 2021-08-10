<?php require 'views/partials/header.view.php' ?>
<section class="main-section">
    <?php foreach ($vars['users'] as $user) : ?>
        <div class="row">
            <a href="/user/<?= $user->id ?>">
                <div class="col-md-3"><?= $user->first_name ?></div>
                <div class="col-md-3"><?= $user->last_name ?></div>
            </a>
        </div>
    <?php endforeach ?>
</section>
<?php require 'views/partials/footer.view.php' ?>