<?php

namespace App\Controllers;

use App\Helpers\Helper;
use App\Models\UserModel;
use App\Libraries\View;
use App\Libraries\MySql;
use App\Libraries\QueryBuilder;
use App\Models\RoleModel;
use Exception;

class UserController extends Controller
{

    public function index()
    {
        
    }

    public function add()
    {

    }

    /**
     * Store a user record into the database
     */
    public function store()
    {
        
    }

    public function edit()
    {
        $id = Helper::getIdFromUrl('user');
        dd($id);
    }

    /**
     * Updates a user record into the database
     */
    public function update()
    {
        
    }

    /**
     * Archive a user record into the database
     */
    public function destroy(int $id)
    {

    }

}

