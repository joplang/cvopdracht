<form method="<?= $vars['method'] ?>" action="<?= $vars['action'] ?>">
    <div class="container mt-5">
        <div class="row p-2">
            <div class="col-md-6">
                <input type="text" name="name" placeholder="Uw opleiding" value="<?= isset($vars['educations']) ? $vars['educations']->name : '' ?>" required>
            </div>
            <div class="col-md-6">
                <input type="text" name="organisation" placeholder="Uw onderwijsinstelling" value="<?= isset($vars['educations']) ? $vars['educations']->organisation : '' ?>" required>
            </div>
        </div>

        <div class="row p-2">
            <div class="col-md-6">
                <input type="date" name="start" placeholder="Wanneer begon u?" value="<?= isset($vars['educations']) ? $vars['educations']->start : '' ?>" required>
            </div>
            <div class="col-md-6">
                <input type="date" name="end" placeholder="Wanneer stopte u?" value="<?= isset($vars['educations']) ? $vars['educations']->end : '' ?>">
            </div>
        </div>
        <div class="row p-2">
            <div class="col"><input type="text" name="info" placeholder="Vertel iets over uw opleiding" value="<?= isset($vars['educations']) ? $vars['educations']->info : '' ?>" required></div>
        </div>


        <input type="hidden" name="f_token" value="<?= createToken() ?>">

        <div class="row p-2">
            <div class="col"><input type="submit" value="Opslaan"></div>
        </div>
    </div>
</form>