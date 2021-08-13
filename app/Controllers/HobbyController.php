<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Libraries\QueryBuilder;
use App\Models\HobbyModel;
use App\Helpers\Helper;
use App\Libraries\MySql;
use PDO;

class HobbyController extends Controller
{

    public function index()
    {

        $hobbyUser = Helper::getUserIdFromSession();

        $sql = "SELECT * FROM hobbies WHERE user_id=" . $hobbyUser . " AND deleted IS NULL";

        $result = MySql::query($sql)->fetchAll(PDO::FETCH_CLASS);


        return View::render(
            'hobbies/main.view',
            [
                'hobbies' => $result
            ]
        );
    }
    public function create()
    {
        return View::render('hobbies/create.view', [
            'method'    => 'POST',
            'action'    => '/hobbies/store',
        ]);
    }

    public function edit()
    {
        $hobbyId = Helper::getIdFromUrl('hobbies');

        $hobby = HobbyModel::load()->get($hobbyId);

        return View::render('hobbies/edit.view', [
            'method'    => 'POST',
            'action'    => '/hobbies/' . $hobbyId . '/update',
            'hobby'      => $hobby,
        ]);
    }

    public function store()
    {
        $hobby = $_POST;

        $hobby['user_id'] = Helper::getUserIdFromSession();
        $hobby['created_by'] = Helper::getUserIdFromSession();
        $hobby['created'] = date('Y-m-d H:i:s');

        HobbyModel::load()->store($hobby);

        return View::redirect('/hobbies');
    }

    public function update()
    {
        $hobbyId = Helper::getIdFromUrl('hobbies');

        $hobby = $_POST;

        $hobby['updated_by'] = Helper::getUserIdFromSession();
        $hobby['updated'] = date('Y-m-d H:i:s');


        HobbyModel::load()->update($hobby, $hobbyId);

        return View::redirect('/hobbies');
    }

    public function delete()
    {
        $hobbyId = Helper::getIdFromUrl('hobbies');

        return View::render('hobbies/delete.view', [
            'method'    => 'POST',
            'action'    => '/hobbies/' . $hobbyId . '/destroy',
        ]);
    }


    public function destroy()
    {
        $hobbyId = Helper::getIdFromUrl('hobbies');

        HobbyModel::load()->destroy($hobbyId);

        return View::redirect('/hobbies');
    }
}
