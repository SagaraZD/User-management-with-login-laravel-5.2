<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'uses' => 'user@loginView',
    'as' => 'loginView'
]);

Route::get('users', [
    'uses' => 'user@getUser',
    'as' => 'users',
    'middleware' => 'auth'
]);

Route::get('addUserView', [
    'uses' => 'user@addUserView',
    'as' => 'addUserView',
 
]);

Route::get('editUserView/id={id}', [
    'uses' => 'user@editUserView',
    'as' => 'editUserView',
    'middleware' => 'auth'
]);

Route::post('addUserPost', [
    'uses' => 'user@addUserPost',
    'as' => 'addUserPost',
]);

Route::post('editUserPost', [
    'uses' => 'user@editUserPost',
    'as' => 'editUserPost',
    'middleware' => 'auth'
]);

Route::post('loginPost', [
    'uses' => 'user@loginPost',
    'as' => 'loginPost'
]);

Route::get('logout', [
  'uses' => 'user@getLogout',
  'as' => 'logout'
]);

Route::get('deleteUser/id={id}', [
    'uses' => 'user@deleteUser',
    'as' => 'deleteUser'
]);
