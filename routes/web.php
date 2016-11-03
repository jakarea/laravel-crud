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
	'middleware' => ['auth'],
	'roles' => ['admin', 'student', 'employee']
]);

Route::get('users', [
	'uses' => 'UserController@getIndex',
	'as' => 'users',
	'middleware' => ['auth'],
	'roles' => ['admin', 'student', 'employee']
]);

Route::get('user/{id}', [
	'uses' => 'UserController@getShow',
	'as' => 'user',
	'middleware' => ['auth'],
	'roles' => ['admin', 'student', 'employee']
]);

Route::get('user/edit/{id}', [
	'uses' => 'UserController@getEdit',
	'as' => 'user/edit',
	'middleware' => ['auth','roles'],
	'roles' => ['Pending', 'Employee','Editor']
]);

Route::post('user/edit/{id}', [
	'uses' => 'UserController@getEdit',
	'as' => 'user/edit',
	'middleware' => ['auth'],
	'roles' => ['admin', 'student', 'employee']
]);

Route::get('user/delete/{id}', [
	'uses' => 'UserController@getEdit',
	'as' => 'user/delete',
	'middleware' => ['auth'],
	'roles' => ['admin', 'student', 'employee']
]);


