<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get(
	'/home',
	array(
		'as' => 'home',
		'uses' => 'ExhibitionController@index')
	);

Route::get(
	'/exhibition/index',
	array(
		'as' => 'exhibition.index',
		'uses' => 'ExhibitionController@index')
	);

Route::get('/exhibition/search',
	'/exhibition/index',
	array(
		'as' => 'exhibition.search',
		'uses' => 'ExhibitionController@search')
	);
