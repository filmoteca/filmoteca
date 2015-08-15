<?php

/*
|----------------------------------------------------------------------------
| ADMIN ZONE
|----------------------------------------------------------------------------
 */

Route::group(['prefix' => 'admin', 'before' => 'validate_admin'], function()
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
    | API.
    |--------------------------------------------------------------------------
     */

    Route::group(['prefix' => 'api'], function () {

        /*
         |--------------------------------------------------------------------------
         | FILMS
         |--------------------------------------------------------------------------
         */

        Route::group(['prefix' => 'films'], function () {

            Route::get('/', 'Api\FilmController@index');
        });

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

        Route::group(['prefix' => 'iconographic'], function()
        {
            Route::post('/{id}',     'Api\IconographicController@update');
//            The PUT verb not work. Someone said to is blame of CSRF protection.
//            Route::put('/{id}',     'Api\IconographicController@update');
            Route::delete('/{id}',  'Api\IconographicController@destroy');
        });

        Route::post('film/store',[
            'as' => 'admin.api.film.store',
            'uses' => 'Api\FilmController@store']);

        /*
        |--------------------------------------------------------------------------
        | Exhibitions
        |--------------------------------------------------------------------------
         */

        Route::group(['prefix' => 'exhibition'], function()
        {
            Route::get('', 		'Api\ExhibitionController@index');
            Route::post('',		'Api\ExhibitionController@store');
            Route::put('/{id}', 	'Api\ExhibitionController@update');
            Route::delete('/{id}', 	'Api\ExhibitionController@destroy');

            Route::post('/{exhibition_id}/schedule', 	'Api\ScheduleController@store');
        });

        Route::put('schedule/{id}', 	'Api\ScheduleController@update');
        Route::delete('schedule/{id}', 	'Api\ScheduleController@destroy');
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
    | Aplicación de exhibiciones (ADMIN)
    |--------------------------------------------------------------------------
     */
    Route::get('/exhibition/app', [
        'as' => 'admin.exhibition.app',
        'uses' => function(){
            return View::make('exhibitions.app');
        }
    ]);

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
        'auditorium','news', 'catalog', 'interview', 'chronology'];

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