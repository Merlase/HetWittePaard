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

Route::get('/', function () {
    return view('index');
});

Route::get('/admin-paneel/', 'AdminController@index');
<<<<<<< HEAD
Route::get('/profile', 'ProfileController@index');
=======
Route::get('/register/', 'RegisterController@index');
>>>>>>> 06e51e7c3ab9e74bb30fba1c9b8b250fda47c72c
