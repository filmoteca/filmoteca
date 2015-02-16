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

Route::get('/home',[
	'as' => 'home',
	'uses' => function(){
		return Redirect::to('/');
	}]);

Route::get('/', 'HomeController@index');

/**
 * Exhibitiones frontend
 */
Route::group(['prefix' => 'exhibition'], function(){

	// app
	Route::get('',				'ExhibitionController@index');
	Route::get('{name?}/{id?}/{title?}', 'ExhibitionController@index');
	Route::get('history',		'ExhibitionController@history');
	Route::get('find',[
		'as'	=> 'exhibition.find',
		'uses' 	=> 'ExhibitionController@find'
		]);

	Route::get('{id}/show',[
		'as' 	=> 'exhibition.show',
		'uses' 	=> 'ExhibitionController@detail'
		]);
	Route::get('{id}/detail-history',[
		'as'	=> 'exhibition.detail-history',
		'uses' 	=> 'ExhibitionController@detailHistory'
		]);
	Route::get('{id}/detail-home',[
		'as' 	=> 'exhibition.detail-home',
		'uses' 	=> 'ExhibitionController@detailHome'
		]);
});

Route::get('/news/show/{id}', 'NewsController@show');

Route::get('/news/index', 'NewsController@index');


Route::get('/shop',
	array(
		'as' => 'shop',
		'uses' => 'ExhibitionController@index' ));

Route::get('/press_register',
	array(
		'as' => 'press_register.create',
		'uses' => 'PressRegisterController@create' ));

Route::post('/press_register/store',
	array(
		'as' => 'press_register.store',
		'uses' => 'PressRegisterController@store' ));

Route::get('/filmoteca-medal/',
	array(
		'as' => 'filmoteca-medal/',
		'uses' => 'FilmotecaMedalController@index')
	);

Route::get('/chronology/',
	array(
		'as' => 'chronology',
		'uses' => 'ChronologyController@index')
	);

Route::get('/pages/quienes-somos/cronologia',function(){

	return Redirect::route('chronology');
});

/*
|------------------------------------------------------------------------------
| APP de cursos.
|------------------------------------------------------------------------------
 */

Route::get('/courses/app', function(){

	return View::make('courses.app');
});

// No se sí vale la pena tener esto fuera de la API de cursos.
Route::get('/courses/verification', [
	'as' => 'courses.verification',
	'uses' => 'Api\Courses\StudentController@verify']);

Route::get('/auditorim/show/{id}', 'AuditoriumController@show');

/*
|----------------------------------------------------------------------------
| PÁGINAS ESTATICAS
|----------------------------------------------------------------------------
 */
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

/*
|----------------------------------------------------------------------------
| API ROUTES. Rutas para llamadas ajax publicas.
|----------------------------------------------------------------------------
 */

Route::group(['prefix' => 'api'], function()
{
	/**
	 * Establecemos el layout. Esto es únicamente para las rutas.
	 * Los controladores definen su propio layout.
	 */
	View::name('layouts.modal', 'modal');

	Route::get('film/search', [
		'as' => 'api.film.search',
		'uses' => 'Api\FilmController@search']);

	Route::get('auditorium/all', [
		'as' => 'api.auditorium.all',
		'uses' => 'Api\AuditoriumController@all']);

	Route::get('iconographic/all', [
		'as' => 'api.iconographic.all',
		'uses' => 'Api\IconographicController@all']);

	Route::get('auditorium/{id}/detail',[
		'as' => 'api.auditorium.detail',
		'uses' => 'Api\AuditoriumController@detail']);

	/*
	|------------------------------------------------------------------------------
	| CURSOS
	|------------------------------------------------------------------------------
	 */
	
	Route::post('courses/student/signup',[
		'as' => 'api.courses.student.signup',
		'uses' => 'Api\Courses\StudentController@signup']);
	
	Route::post('courses/student/login',[
		'as' => 'api.courses.student.login',
		'uses' => 'Api\Courses\StudentController@login']);

	Route::get('courses/student/logout',[
		'as' => 'api.courses.student.logout',
		'uses' => 'Api\Courses\StudentController@logout']);
	
	Route::get('courses/student/recover-password', [
		'as' => 'api.courses.student.recover-password',
		'uses' => 'Api\Courses\StudentController@recoverPassword']);

	Route::post('courses/student/change-password', [
		'as' => 'api.courses.student.change-password',
		'uses' => 'Api\Courses\StudentController@changePassword']);

	Route::post('courses/student/update', [
		'as' => 'api.courses.student.update',
		'uses' => 'Api\Courses\StudentController@update']);

	Route::get('courses/course/{id}/signup',[
		'as' => 'api.courses.course',
		'uses' => 'Api\Courses\CourseController@signup']);

	Route::get('courses/student/courses','Api\Courses\StudentController@courses');

	Route::get('courses/course', 'Api\Courses\CourseController@index');

	Route::get('courses/course/{id}','Api\Courses\CourseController@show');
});


/*
|----------------------------------------------------------------------------
| ADMIN ZONE
|----------------------------------------------------------------------------
 */

Route::group(['prefix' => 'admin'], function()
{
	/*
	|--------------------------------------------------------------------------
	| DASHBOARD
	|--------------------------------------------------------------------------
	 */

	Route::get('/', [
		'as' => 'admin.dashboard',
		'uses' => function(){
			Redirect::to('/admin/dashboard/login');
		}]);

	/*
	|--------------------------------------------------------------------------
	| AJAX.
	|--------------------------------------------------------------------------
	 */
	
	Route::group(['prefix' => 'api'], function()
	{
		View::name('layouts.modal', 'modal');

		Route::get('film/create', function()
		{
			return View::make('api.films.create');
		});

		Route::get('iconographic/create', function()
		{
			return View::make('api.iconographics.create');
		});

		Route::post('iconographic/store', [
			'as' => 'admin.api.iconographic.store',
			'uses' => 'Api\IconographicController@store']);

		Route::post('film/store',[
			'as' => 'admin.api.film.store',
			'uses' => 'Api\FilmController@store']);

		Route::post('exhibition/store',[
			'as' => 'admin.api.exhibition.store',
			'uses' => 'Api\ExhibitionController@store']);
	});


	/*
	|--------------------------------------------------------------------------
	| Aplicación de cursos (ADMIN)
	|--------------------------------------------------------------------------
	 */
	Route::get('course/app', function(){

		return View::make('courses.admin-app');
	});

	/*
	|--------------------------------------------------------------------------
	| RECURSOS. Lo que pueden ser creados, editados, borrados y listados.
	|--------------------------------------------------------------------------
	 */
	
	/**
	 * ## ENHANCEMENT: Usar un único controlador para todos estos recursos.
	 */

	$resources = ['film', 'filmotecaMedal', 'billboard',
		'professor', 'subject','venue','course', 'student',
		'exhibition', 'auditorium','news', 'catalog', 'interview', 'chronology'];

	/**
	 * El nombre de las rutas tienen el prefijo admin. (incluyendo el punto)
	 */
	array_map(function($resource)
	{
		Route::resource($resource, sprintf('Resources\%sController', ucfirst($resource) ) );
	}, $resources );

	Route::get('billboard/send',[
			'as'=> 'admin.billboard.send', 
			'uses' => 'Resources\BillboardConstroller@Send']);

	Route::get('/press_register/index',
	array(
		'as' => 'admin.press_register.index',
		'uses' => 'PressRegisterController@index' ));

	Route::delete('/press_register/destroy/{id}',
	array(
		'as' => 'admin.press_register.destroy',
		'uses' => 'PressRegisterController@destroy' ));
});