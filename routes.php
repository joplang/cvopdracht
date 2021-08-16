<?php

/** --------------------------------------------------------------------------------------------------------
 * Add your routes here.
 * At this point, variables in a route are not supported like in Laravel: user/{user_id}/edit
 *  I add this in a future version.
 * 
 * Protect your routes with one ore more Middleware classes, like WhenNotLoggedIn or Permissions.
 *  See the classes for more information.
 * Add Middleware in an associative array with a key, like the admin route
 * ---------------------------------------------------------------------------------------------------------
 */

use App\Controllers\JobController;
use App\Middleware\WhenNotLoggedin;
use App\Middleware\Permissions;


$router->get('admin', 'App/Controllers/AdminController.php@index', [
    'auth' => WhenNotLoggedin::class,
]);


//users
$router->get('user', 'App/Controllers/UserController.php@index');
$router->get('user/{id}', 'App/Controllers/UserController.php@show');
$router->get('user/{id}/edit', 'App/Controllers/UserController.php@edit', [
    'update' => Permissions::class
]);
$router->get('user/create', 'App/Controllers/UserController.php@create');
$router->post('user/{id}/update', 'App/Controllers/UserController.php@update', [
    'update' => Permissions::class
]);

$router->post('user/store', 'App/Controllers/UserController.php@store', [
    'create' => Permissions::class
]);


//jobs
$router->get('jobs', 'App/Controllers/JobController.php@index', [
    'show' => Permissions::class
]);
$router->get('jobs/create', 'App/Controllers/JobController.php@create', [
    'create' => Permissions::class
]);
$router->get('jobs/{id}/edit', 'App/Controllers/JobController.php@edit', [
    'update' => Permissions::class
]);
$router->get('jobs/{id}/delete', 'App/Controllers/JobController.php@delete', [
    'delete' => Permissions::class
]);
$router->post('jobs/{id}/update', 'App/Controllers/JobController.php@update', [
    'update' => Permissions::class
]);
$router->post('jobs/store', 'App/Controllers/JobController.php@store', [
    'update' => Permissions::class
]);
$router->post('jobs/{id}/destroy', 'App/Controllers/JobController.php@destroy', [
    'delete' => Permissions::class
]);



//educations
$router->get('educations', 'App/Controllers/EducationController.php@index', [
    'show' => Permissions::class
]);
$router->get('educations/create', 'App/Controllers/EducationController.php@create', [
    'create' => Permissions::class
]);
$router->get('educations/{id}/edit', 'App/Controllers/EducationController.php@edit', [
    'update' => Permissions::class
]);
$router->get('educations/{id}/delete', 'App/Controllers/EducationController.php@delete', [
    'delete' => Permissions::class
]);
$router->post('educations/{id}/update', 'App/Controllers/EducationController.php@update', [
    'update' => Permissions::class
]);
$router->post('educations/store', 'App/Controllers/EducationController.php@store', [
    'update' => Permissions::class
]);
$router->post('educations/{id}/destroy', 'App/Controllers/EducationController.php@destroy', [
    'delete' => Permissions::class
]);







//hobbies
$router->get('hobbies', 'App/Controllers/HobbyController.php@index', [
    'show' => Permissions::class
]);
$router->get('hobbies/create', 'App/Controllers/HobbyController.php@create', [
    'create' => Permissions::class
]);
$router->get('hobbies/{id}/edit', 'App/Controllers/HobbyController.php@edit', [
    'update' => Permissions::class
]);
$router->get('hobbies/{id}/delete', 'App/Controllers/HobbyController.php@delete', [
    'delete' => Permissions::class
]);
$router->post('hobbies/{id}/update', 'App/Controllers/HobbyController.php@update', [
    'update' => Permissions::class
]);
$router->post('hobbies/store', 'App/Controllers/HobbyController.php@store', [
    'update' => Permissions::class
]);
$router->post('hobbies/{id}/destroy', 'App/Controllers/HobbyController.php@destroy', [
    'delete' => Permissions::class
]);




//skills
$router->get('skills', 'App/Controllers/SkillController.php@index', [
    'show' => Permissions::class
]);
$router->get('skills/create', 'App/Controllers/SkillController.php@create', [
    'create' => Permissions::class
]);
$router->get('skills/{id}/edit', 'App/Controllers/SkillController.php@edit', [
    'update' => Permissions::class
]);
$router->get('skills/{id}/delete', 'App/Controllers/SkillController.php@delete', [
    'delete' => Permissions::class
]);
$router->post('skills/{id}/update', 'App/Controllers/SkillController.php@update', [
    'update' => Permissions::class
]);
$router->post('skills/store', 'App/Controllers/SkillController.php@store', [
    'update' => Permissions::class
]);
$router->post('skills/{id}/destroy', 'App/Controllers/SkillController.php@destroy', [
    'delete' => Permissions::class
]);



$router->get('me', 'App/Controllers/ProfileController.php@index');

$router->get('', 'App/Controllers/HomeController.php@index');
$router->get('home', 'App/Controllers/HomeController.php');

$router->get('login', 'App/Controllers/LoginController.php@index');
$router->get('logout', 'App/Controllers/LoginController.php@logout');
$router->post('login/auth', 'App/Controllers/LoginController.php@login');

$router->get('contact', 'App/Controllers/ContactController.php@index');

$router->get('register', 'App/Controllers/RegisterController.php@index');
$router->post('register', 'App/Controllers/RegisterController.php@store');
