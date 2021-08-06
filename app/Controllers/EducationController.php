<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Libraries\QueryBuilder;

class EducationController extends Controller
{

    public function index()
    {
        return View::render('educations/main.view');
    }
}
