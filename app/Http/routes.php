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
//The original welcome page for Laravel 5
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::resource('items', 'ItemsController');
//This is equivalent to the below calls//
/*
Route::get('contact', 'ContactController@contact');
Route::get('items', 'ItemsController@index');
Route::get('items/create', 'ItemsController@create');
Route::get('items/{id}', 'ItemsController@show');
Route::post('items', 'ItemsController@store');
*/

Route::get('/', 'ItemsController@index');
Route::get('home', 'ItemsController@index');

/*Static Pages*/
Route::get('about', 'PagesController@about');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);