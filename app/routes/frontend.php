<?php

Route::get('/home', [
    'as' => 'home',
    'uses' => function () {
        return Redirect::to('/');
    }]);

Route::get('/', 'HomeController@index');

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

Route::get('/filmoteca-medal', [
        'as' => 'filmoteca-medal',
        'uses' => 'Filmoteca\Frontend\Controllers\FilmotecaMedalController@index'
]);

Route::get('/filmoteca-medal/{id}', [
    'as' => 'filmoteca_medal_show',
    'uses' => 'Filmoteca\Frontend\Controllers\FilmotecaMedalController@show'
]);

Route::get('/chronology', [
    'as' => 'chronology',
    'uses' => 'Filmoteca\Frontend\Controllers\ChronologyController@index'
]);

Route::get('/chronology/{id}', [
    'as' => 'chronology_show',
    'uses' => 'Filmoteca\Frontend\Controllers\ChronologyController@show'
]);

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

/*
|----------------------------------------------------------------------------
| PÁGINAS ESTATICAS
|----------------------------------------------------------------------------
 */

Route::get('/pages/{dir_or_name}/{name?}', 'PageController@show');
