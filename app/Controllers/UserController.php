<?php

namespace App\Controllers;

use App\Helpers\Helper;
use App\Models\UserModel;

class UserController extends Controller
{

    /**
     * Show's a list of users
     */
    public function index()
    {
        
    }

    /**
     * Show a form to create a new user
     */
    public function create()
    {

    }

    /**
     * Store a user record into the database
     */
    public function store()
    {
        
    }

    /**
     * Show a form to edit a user record
     */
    public function edit()
    {
        
    }

    /**
     * Updates a user record into the database
     */
    public function update()
    {
        
    }

    /**
     * Show user record
     */
    public function show()
    {
        $userId = Helper::getIdFromUrl('user');
        
        $user = UserModel::load()->get($userId);
    }

    /**
     * Archive a user record into the database (soft delete)
     */
    public function destroy()
    {

    }

}

