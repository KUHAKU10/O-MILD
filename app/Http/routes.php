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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
Route::get('novel','MainController@index');

Route::get('novel/add','MainController@createstory');

Route::post('novel/save','MainController@storestory');

Route::get('novel/edit/{id}','MainController@editstory');

Route::get('novel/delete/{id}','MainController@deletestory');
