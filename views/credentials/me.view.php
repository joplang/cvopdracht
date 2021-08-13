<?php


require 'views/partials/header.view.php' ?>
<section class="main-section p-2 ">
    <div class="container">
        <?php $user = $vars['user']; ?>
        <header class="flex-wrap ">
            <div class="row">
                <div class="col-7 text-center p-2">
                    <h2> <?= $user->first_name ?> <?= $user->last_name ?></h2>
                    <br>
                    <h3><a href="/user/<?= $user->id ?>/edit">Pas je profiel aan!</a></h3>
                </div>
                <div class="d-flex flex-column p-2">
                    <h4> <?= $user->email  ?></h4>
                    <h4> <?= isset($user->birthday) ? $user->birthday : "<a href='/user/" . $user->id . "/edit'>Voeg Verjaardag Toe!</a>" ?></h4>
                    <h4> <?= isset($user->city) ? $user->city : "<a href='/user/" . $user->id . "/edit'>Voeg Woonplaats Toe!</a>" ?></h4>
                </div>
            </div>
        </header>
        <div class="row gy-5">
            <div class="col-4">
                <div class="card m-2">
                    <div class="card-header">
                        <h3>Opleidingen</h3>
                    </div>
                    <div class="card-body">
                        <div class="card-title"><a href="educations/create">Voeg een opleiding toe!</a></div>
                        <?php foreach ($vars['educations'] as $education) : ?>
                            <div class="card-text"> </div>
                            <div class="card-text">
                                <h4><?= $education->name ?></h4>
                            </div>
                            <p>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample<?= $education->id ?>" aria-expanded="false" aria-controls="collapseExample">
                                    Informatie
                                </button>
                            </p>
                            <div class="collapse" id="collapseExample<?= $education->id ?>">
                                <div class="card card-body">
                                    <ul>
                                        <li><?= $education->organisation ?></li>
                                        <li>Begonnen op <?= $education->start ?> </li>
                                        <li> <?= isset($education->end) ? "Afgerond op " . $education->end . "!" : "Niet volbracht" ?> </li>
                                        <li><?= $education->info ?></li>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card m-2">
                    <div class="card-header">
                        <h3>Werkervaring</h3>
                    </div>
                    <div class="card-body">
                        <div class="card-title"><a href="jobs/create">Voeg een baan toe!</a></div>
                        <?php foreach ($vars['jobs'] as $job) : ?>
                            <div class="card-text"> </div>
                            <div class="card-text">
                                <h4><?= $job->name ?></h4>
                            </div>
                            <p>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseJob<?= $job->id ?>" aria-expanded="false" aria-controls="collapseJob">
                                    Informatie
                                </button>
                            </p>
                            <div class="collapse" id="collapseJob<?= $job->id ?>">
                                <div class="card card-body">
                                    <ul>
                                        <li><?= $job->location ?></li>
                                        <li>Begonnen op <?= $job->start ?> </li>
                                        <li> <?= isset($job->end) ? "Afgerond op " . $job->end . "!" : "Niet volbracht" ?> </li>
                                        <li><?= $job->info ?></li>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row-4">
                    <div class="card m-2">
                        <div class="card-header">
                            <h4>Vaardigheden</h4>
                        </div>
                        <div class="card-title p-2"><a href="skills/create">Voeg een vaardigheid toe!</a></div>
                        <?php foreach ($vars['skills'] as $skill) : ?>
                            <div class="row p-2">
                                <b>
                                    <div class="col"> <?= $skill->name ?> </div>
                                </b>
                                <div class="col"> <?= $skill->info ?> </div>
                            </div>

                        <?php endforeach ?>
                    </div>
                </div>
                <div class="row-4">
                    <div class="card m-2">
                        <div class="card-header">
                            <h4>Hobbies</h4>
                        </div>
                        <div class="card-title p-2"><a href="hobbies/create">Voeg een hobby toe!</a></div>
                        <?php foreach ($vars['hobbies'] as $hobby) : ?>
                            <div class="row p-2">
                                <b>
                                    <div class="col"> <?= $hobby->name ?> </div>
                                </b>
                                <div class="col"> <?= $hobby->info ?> </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>

            </div>

        </div>

</section>

<?php require 'views/partials/footer.view.php' ?>