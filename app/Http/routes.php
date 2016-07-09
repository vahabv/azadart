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

<<<<<<< HEAD

Route::get('/', 'HomeController@index');
=======
Route::get('/home', 'HomeController@index');

Route::get('/index', 'HomeController@index');
>>>>>>> ef636586db8bde3dfc457dbabeb247b832ed3b47

Route::get('/submitproject', 'HomeController@submitproject');

Route::get('/auth', 'HomeController@auth');

Route::get('/author', 'HomeController@author');


Route::get('/profiles', 'HomeController@profiles');





