<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Libraries\QueryBuilder;

class HobbyController
{

    public function index()
    {
        return View::render('hobbies/main.view');
    }
}