<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Libraries\QueryBuilder;
use App\Models\JobsModel;
use App\Helpers\Helper;
use App\Libraries\MySql;

class JobController extends Controller
{

    public function index()
    {

        return View::render('jobs/main.view');
    }



    public function create()
    {
        return View::render('jobs/create.view', [
            'method'    => 'POST',
            'action'    => '/jobs/store',
        ]);
    }

    public function edit()
    {
        $jobId = Helper::getIdFromUrl('jobs');

        $job = JobsModel::load()->get($jobId);

        return View::render('jobs/edit.view', [
            'method'    => 'POST',
            'action'    => '/jobs/' . $jobId . '/update',
            'job'      => $job,
        ]);
    }

    public function store()
    {
    }
}
