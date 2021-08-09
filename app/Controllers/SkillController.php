<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Libraries\QueryBuilder;

class SkillController extends Controller
{

    public function index()
    {
        return View::render('skills/main.view');
    }
}
