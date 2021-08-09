<form method="<?= $vars['method'] ?>" action="<?= $vars['action'] ?>">
    <div class="container mt-5">
        <div class="row mb-3">
            <div class="col-md-4">
                <input type="text" name="name" placeholder="Uw hobby" value="<?= isset($vars['hobby']) ? $vars['hobby']->name : '' ?>" required>
            </div>
            <div class="col-md-4">
                <input type="text" name="info" placeholder="Vertel iets over uw hobby" value="<?= isset($vars['hobby']) ? $vars['hobby']->info : '' ?>" required>
            </div>


            <input type="hidden" name="f_token" value="<?= createToken() ?>">

            <input type="submit" value="Opslaan">
        </div>
</form>