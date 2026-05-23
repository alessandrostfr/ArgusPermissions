<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Public routes, Laravel authentication routes and authenticated RBAC
| management routes.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| RBAC management
|--------------------------------------------------------------------------
|
| These resource controllers are protected internally with Gates/Policies.
| Users cannot be created from this admin module; registration is handled by
| Laravel Auth and roles are assigned afterwards.
|
*/

Route::resource('/role', 'RoleController')->names('role');

Route::resource('/user', 'UserController', [
    'except' => [
        'create',
        'store',
    ],
])->names('user');
