<?php

namespace App\Controllers;

use App\Helpers\Helper;
use App\Libraries\View;
use App\Models\EducationModel;
use App\Models\HobbyModel;
use App\Models\JobsModel;
use App\Models\SkillModel;
use App\Models\UserModel;

class ProfileController
{
    public function index()
    {
        if (isset($_SESSION) && isset($_SESSION['user'])) {

            $userId = Helper::getUserIdFromSession();

            $user = UserModel::load()->get($userId);

            return View::render('credentials/me.view', [
                'user'          => $user,
                'jobs'          => JobsModel::load()->all(NULL, $userId),
                'educations'    => EducationModel::load()->all(NULL, $userId),
                'hobbies'       => HobbyModel::load()->all(NULL, $userId),
                'skills'        => SkillModel::load()->all(NULL, $userId),
            ]);
        } else {
            header('Location: /');
        }
    }

    public function changeEmail()
    {
    }
}
