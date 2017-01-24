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

Route::get('/translation', 'WelcomeController@translation');

//Route::post('/translate_post', 'WelcomeController@translate_post')->name('translate_post');

Route::post('/translate_post' , ['uses' => 'WelcomeController@translate_post'])->name('translate_post');

Route::get('home', 'HomeController@index');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
