<form method="<?= $vars['method'] ?>" action="/user/store">
    <input type="text" name="first_name" placeholder="Voornaam">

    <input type="hidden" name="f_token" value="<?= createToken() ?>">

    <input type="submit" value="Opslaan">
</form>