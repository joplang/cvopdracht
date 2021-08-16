<?php require 'views/partials/header.view.php' ?>
<section class="main-section">
    <div class="container p-2">
        <?php foreach ($vars['users'] as $user) : ?>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <a href="/user/<?= $user->id ?>">
                            <div class="col-6">
                                <div class="card-body"><b><?= $user->first_name ?></b> <?= $user->last_name ?></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>
<?php require 'views/partials/footer.view.php' ?>