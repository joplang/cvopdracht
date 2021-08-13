<?php require 'views/partials/header.view.php' ?>
<section class="main-section">
    <div class="container">
        <?php foreach ($vars['users'] as $user) : ?>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <a href="/user/<?= $user->id ?>">
                            <div class="card-body"><?= $user->first_name ?> <?= $user->last_name ?></div>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>
<?php require 'views/partials/footer.view.php' ?>