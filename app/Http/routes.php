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


Route::auth();


Route::get('/', 'HomeController@index');
Route::get('/auth', 'HomeController@auth');

Route::group(['middleware' => ['auth']], function () {

	Route::get('/submitproject', 'HomeController@submitproject');

	Route::get('/author', 'HomeController@author');
	Route::get('/auth', 'HomeController@author');


	Route::get('/profile', 'HomeController@profile');

	Route::get('/profiles', 'HomeController@profiles');

	Route::post('/insert', 'ProfileController@insert');



});


