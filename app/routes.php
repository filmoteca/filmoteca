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

Route::get('/home',
	array(
		'as' => 'home',
		'uses' => 'ExhibitionController@index')
	);

Route::get('/exhibition/index',
	array(
		'as' => 'exhibition.index',
		'uses' => 'ExhibitionController@index')
	);

Route::get('/exhibition/search',
	array(
		'as' => 'exhibition.search',
		'uses' => 'ExhibitionController@search')
	);

Route::get('/exhibition/{id}/detail/',
	array(
		'as' => 'exhibition.detail',
		'uses' => 'ExhibitionController@detail'));

Route::get('/pages/{dir_or_page}/{page_name?}',
	function($dir_or_page = null, $page_name = null)
{
	View::name('layouts.default', 'default');

	$view = 'pages';

	if( !is_null($page_name) ) //Se proporciono un subdirectorio
	{
		$view .= '.' . $dir_or_page . '.' . $page_name;
	}else{
		$view .=  '.' .$dir_or_page;
	}
	
	//El primer parámetro no entiendo bien que significa.
	return View::of('default')->nest('content', $view);
});
