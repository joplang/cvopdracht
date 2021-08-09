<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Libraries\QueryBuilder;
use App\Models\JobsModel;
use App\Helpers\Helper;
use App\Libraries\MySql;
use PDO;

class JobController extends Controller
{

    public function index()
    {

        $jobUser = Helper::getUserIdFromSession();

        //dd(JobsModel::load()->all());

        $sql = "SELECT * FROM jobs WHERE user_id=" . $jobUser . " AND deleted IS NULL";

        $result = MySql::query($sql)->fetchAll(PDO::FETCH_CLASS);

        //dd($result);

        return View::render(
            'jobs/main.view',
            [
                'jobs' => $result
            ]
        );
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
        $job = $_POST;


        $job['user_id'] = Helper::getUserIdFromSession();
        $job['created_by'] = Helper::getUserIdFromSession();
        $job['created'] = date('Y-m-d H:i:s');

        JobsModel::load()->store($job);

        return View::redirect('/jobs');
    }

    public function update()
    {
        $jobId = Helper::getIdFromUrl('jobs');

        $job   = $_POST;

        $job['updated_by'] = Helper::getUserIdFromSession();
        $job['updated'] = date('Y-m-d H:i:s');


        JobsModel::load()->update($job, $jobId);

        return View::redirect('/jobs');
    }


    public function delete()
    {
        $jobId = Helper::getIdFromUrl('jobs');

        return View::render('jobs/delete.view', [
            'method'    => 'POST',
            'action'    => '/jobs/' . $jobId . '/destroy',
        ]);
    }


    public function destroy()
    {
        $jobId = Helper::getIdFromUrl('jobs');

        JobsModel::load()->destroy($jobId);

        return View::redirect('/jobs');
    }
}
