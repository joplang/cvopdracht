<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Libraries\QueryBuilder;

class JobController
{

    public function index()
    {
        return View::render('jobs/main.view');
    }
}