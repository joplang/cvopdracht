<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Helpers\Helper;
use App\Libraries\MySql;
use App\Models\SkillModel;
use PDO;

class SkillController extends Controller
{

    public function index()
    {

        $skillUser = Helper::getUserIdFromSession();

        $sql = "SELECT * FROM skills WHERE user_id=" . $skillUser . " AND deleted IS NULL";

        $result = MySql::query($sql)->fetchAll(PDO::FETCH_CLASS);


        return View::render(
            'skills/main.view',
            [
                'skills' => $result
            ]
        );
    }

    public function create()
    {
        return View::render('skills/create.view', [
            'method'    => 'POST',
            'action'    => '/skills/store',
        ]);
    }

    public function edit()
    {
        $skillId = Helper::getIdFromUrl('skills');

        $skill = SkillModel::load()->get($skillId);

        dd($_SESSION);
        return View::render('skills/edit.view', [
            'method'    => 'POST',
            'action'    => '/skills/' . $skillId . '/update',
            'skill'      => $skill,
        ]);
    }

    public function store()
    {
        $skill = $_POST;

        $skill['user_id'] = Helper::getUserIdFromSession();
        $skill['created_by'] = Helper::getUserIdFromSession();
        $skill['created'] = date('Y-m-d H:i:s');

        SkillModel::load()->store($skill);


        return View::redirect('/skills');
    }

    public function update()
    {
        $skillId = Helper::getIdFromUrl('skills');

        $skill = $_POST;

        $skill['updated_by'] = Helper::getUserIdFromSession();
        $skill['updated'] = date('Y-m-d H:i:s');


        SkillModel::load()->update($skill, $skillId);

        return View::redirect('/skills');
    }

    public function delete()
    {
        $skillId = Helper::getIdFromUrl('skills');

        return View::render('skills/delete.view', [
            'method'    => 'POST',
            'action'    => '/skills/' . $skillId . '/destroy',
        ]);
    }

    public function destroy()
    {
        $skillId = Helper::getIdFromUrl('skills');

        SkillModel::load()->destroy($skillId);

        return View::redirect('/skills');
    }
}
