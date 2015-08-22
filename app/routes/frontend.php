<?php

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

    Route::get('/filter/{name?}/{id?}/{title?}', 'ExhibitionController@index');
});

Route::get('auditorium/{id}', 'AuditoriumController@show');

Route::get('/news/show/{id}', 'NewsController@show');

Route::get('/news/index', 'NewsController@index');


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

Route::get('/billboard', [
    'as' => 'billboard',
    'uses' => 'BillboardController@index'
]);

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

Route::get('/pages/{dir_or_name}/{name?}','PageController@show');

/*
|----------------------------------------------------------------------------
| API ROUTES. Rutas para llamadas ajax publicas.
|----------------------------------------------------------------------------
 */

Route::group(['prefix' => 'api'], function () {

    Route::get('genres', 'Api\GenreController@index');
    Route::get('countries', 'Api\CountryController@index');

    /**
     * Establecemos el layout. Esto es únicamente para las rutas.
     * Los controladores definen su propio layout.
     */
    View::name('layouts.modal', 'modal');

    Route::get('film/search', [
        'as' => 'api.film.search',
        'uses' => 'Api\FilmController@search']);

    Route::get('film','Api\FilmController@search');

    Route::get('auditorium/all', [
        'as' => 'api.auditorium.all',
        'uses' => 'Api\AuditoriumController@all']);

    Route::get('iconographic/all', [
        'as' => 'api.iconographic.all',
        'uses' => 'Api\IconographicController@all']);

    Route::get('auditorium/{id}/detail',[
        'as' => 'api.auditorium.detail',
        'uses' => 'Api\AuditoriumController@detail']);

    Route::group(['prefix' => 'exhibition'], function(){

        Route::get('/{id}', 'Api\ExhibitionController@show');
    });

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
