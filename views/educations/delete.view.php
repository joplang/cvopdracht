<?php require 'views/partials/header.view.php' ?>

<form method="<?= $vars['method'] ?>" action="<?= $vars['action'] ?>">
    <div class="container mt-5">

        <h2>Weet u het zeker?</h2>
        <a href="/educations">Laat toch maar zitten</a>


        <input type="hidden" name="f_token" value="<?= createToken() ?>">

        <input type="submit" value="verwijder!">
    </div>
</form>