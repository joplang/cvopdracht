<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Libraries\QueryBuilder;

class AdminController
{

    public function index()
    {
        $query = new QueryBuilder;

        $sql = $query->select()
            ->from('roles')
            ->where('id', '>', 1)
            ->get();

        dd($sql);

        return View::render('admin/main.view');
    }
}