<form method="<?= $vars['method'] ?>" action="<?= $vars['action'] ?>">
    <div class="container mt-5">
        <div class="row mb-3">
            <div class="col-md-4">
                <input type="text" name="name" placeholder="Uw Baan" value="<?= isset($vars['job']) ? $vars['job']->name : '' ?>" required>
            </div>
            <div class="col-md-4">
                <input type="date" name="start" placeholder="Wanneer begon u?" value="<?= isset($vars['job']) ? $vars['job']->start : '' ?>" required>
            </div>
            <div class="col-md-4">
                <input type="date" name="end" placeholder="Wanneer begon u?" value="<?= isset($vars['job']) ? $vars['job']->end : '' ?>" required>
            </div>
        </div>
        <div class="col-md-4">
            <input type="text" name="info" placeholder="Vertel iets over uw baan" value="<?= isset($vars['job']) ? $vars['job']->info : '' ?>" required>
        </div>


        <input type="hidden" name="f_token" value="<?= createToken() ?>">

        <input type="submit" value="Opslaan">
    </div>
</form>