<?php

Route::get('/home', [
    'as' => 'home',
    'uses' => function () {
        return Redirect::to('/');
    }]);

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'exhibition'], function () {

    // app
    Route::get('', 'ExhibitionController@index');
    Route::get('history', 'ExhibitionController@history');
    Route::get('find', [
        'as' => 'exhibition.find',
        'uses' => 'ExhibitionController@find'
    ]);

    Route::get('{id}/show', [
        'as' => 'exhibition.show',
        'uses' => 'ExhibitionController@detail'
    ]);
    Route::get('{id}/detail-history', [
        'as' => 'exhibition.detail-history',
        'uses' => 'ExhibitionController@detailHistory'
    ]);
    Route::get('{id}/detail-home', [
        'as' => 'exhibition.detail-home',
        'uses' => 'ExhibitionController@detailHome'
    ]);

    Route::get('/filter/{name?}/{id?}/{title?}', 'ExhibitionController@index');
});

Route::get('auditorium/{id}', 'AuditoriumController@show');

Route::get('/news/show/{id}', 'NewsController@show');

Route::get('/news/index', 'NewsController@index');


Route::get('/press_register', [
        'as' => 'press_register.create',
        'uses' => 'PressRegisterController@create'
]);

Route::post('/press_register/store', [
        'as' => 'press_register.store',
        'uses' => 'PressRegisterController@store'
]);

Route::get('/filmoteca-medal/', [
        'as' => 'filmoteca-medal/',
        'uses' => 'FilmotecaMedalController@index'
]);

Route::get('/chronology/', [
        'as' => 'chronology',
        'uses' => 'ChronologyController@index'
]);

Route::get('/billboard', [
    'as' => 'billboard',
    'uses' => 'BillboardController@index'
]);

Route::get('/pages/quienes-somos/cronologia', function () {

    return Redirect::route('chronology');
});

/*
|------------------------------------------------------------------------------
| APP de cursos.
|------------------------------------------------------------------------------
 */

Route::get('/courses/app', function () {

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

Route::get('/pages/{dir_or_name}/{name?}', 'PageController@show');
