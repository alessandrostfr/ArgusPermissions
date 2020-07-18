<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\ArgusPermission\Models\Role;
use App\ArgusPermission\Models\Permission;
use Illuminate\Support\Facades\Gate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $user = User::find(2);
    //$user->roles()->sync([2]);
    //return $user->havePermission('role.index');
    Gate::authorize('haveaccess','role.index');
    return $user;
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/role', 'RoleController')->names('role');
Route::resource('/user', 'UserController', [
    'except' =>[
        'create',
        'store'
    ]
])->names('user');

