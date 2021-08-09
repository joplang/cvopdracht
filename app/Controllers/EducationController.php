<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Libraries\QueryBuilder;
use App\Models\EducationModel;
use App\Helpers\Helper;
use App\Libraries\MySql;
use PDO;

class EducationController extends Controller
{

    public function index()
    {

        $educationUser = Helper::getUserIdFromSession();


        $sql = "SELECT * FROM educations WHERE user_id=" . $educationUser . " AND deleted IS NULL";

        $result = MySql::query($sql)->fetchAll(PDO::FETCH_CLASS);

        //dd($result);

        return View::render(
            'educations/main.view',
            [
                'educations' => $result
            ]
        );
    }

    public function create()
    {
        return View::render('educations/create.view', [
            'method'    => 'POST',
            'action'    => '/educations/store',
        ]);
    }

    public function edit()
    {
        $educationId = Helper::getIdFromUrl('educations');

        $education = EducationModel::load()->get($educationId);

        return View::render('educations/edit.view', [
            'method'    => 'POST',
            'action'    => '/educations/' . $educationId . '/update',
            'educations'      => $education,
        ]);
    }

    public function store()
    {
        $education = $_POST;

        $education['user_id'] = Helper::getUserIdFromSession();
        $education['created_by'] = Helper::getUserIdFromSession();
        $education['created'] = date('Y-m-d H:i:s');


        //dd($education);
        EducationModel::load()->store($education);

        return View::redirect('/educations');
    }

    public function update()
    {
        $educationId = Helper::getIdFromUrl('educations');

        $education = $_POST;

        $education['updated_by'] = Helper::getUserIdFromSession();
        $education['updated'] = date('Y-m-d H:i:s');

        //dd($education);

        EducationModel::load()->update($education, $educationId);

        return View::redirect('/educations');
    }
    public function delete()
    {
        $educationId = Helper::getIdFromUrl('educations');

        return View::render('educations/delete.view', [
            'method'    => 'POST',
            'action'    => '/educations/' . $educationId . '/destroy',
        ]);
    }


    public function destroy()
    {
        $educationId = Helper::getIdFromUrl('educations');

        EducationModel::load()->destroy($educationId);

        return View::redirect('/educations');
    }
}
