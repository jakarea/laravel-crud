<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();
Route::get('/','IndexController@index');
Route::get('/home', 'HomeController@index');
Route::resource('job','JobController');

//for all type of users to view dashboard
Route::get('/dashboard', [
	'uses' => 'UserController@index',
	'as' => 'dashboard',
	'middleware' => ['auth', 'roles'],
	'roles' => ['admin', 'student', 'employee']
]);


