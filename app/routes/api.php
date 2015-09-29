<?php

/*
|-----------------------------------------------------------------------
| Public
|-----------------------------------------------------------------------
*/

Route::group(['prefix' => 'api'], function () {

    Route::get('genres', 'Api\GenreController@index');
    Route::get('countries', 'Api\CountryController@index');

    Route::get('auditorium/all', [
        'as' => 'api.auditorium.all',
        'uses' => 'Api\AuditoriumController@all']);

    Route::get('iconographic/all', [
        'as' => 'api.iconographic.all',
        'uses' => 'Api\IconographicController@all']);

    Route::get('auditorium/{id}/detail', [
        'as' => 'api.auditorium.detail',
        'uses' => 'Api\AuditoriumController@detail']);

    Route::group(['prefix' => 'exhibition'], function () {

        Route::get('/{id}', 'Api\ExhibitionController@show');
    });

    /*
    |------------------------------------------------------------------------------
    | CURSOS
    |------------------------------------------------------------------------------
     */

    Route::post('courses/student/signup', [
        'as' => 'api.courses.student.signup',
        'uses' => 'Api\Courses\StudentController@signup']);

    Route::post('courses/student/login', [
        'as' => 'api.courses.student.login',
        'uses' => 'Api\Courses\StudentController@login']);

    Route::get('courses/student/logout', [
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

    Route::get('courses/course/{id}/signup', [
        'as' => 'api.courses.course',
        'uses' => 'Api\Courses\CourseController@signup']);

    Route::get('courses/student/courses', 'Api\Courses\StudentController@courses');

    Route::get('courses/course', 'Api\Courses\CourseController@index');

    Route::get('courses/course/{id}', 'Api\Courses\CourseController@show');

});

/*
|----------------------------------------------------------------------
| Private (Administrator)
|----------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin/api'], function () {

    Route::group(['before' => 'validate_admin'], function () {

        /*
        |-----------------------------------------------------------------
        | FILMS
        |------------------------------------------------------------------
        */

        Route::group(['prefix' => 'films'], function () {

            Route::get('/', 'Api\FilmController@index');
            Route::get('/{id}', 'Api\FilmController@show');
            Route::post('/', 'Api\FilmController@store');
            Route::put('/{id}', 'Api\FilmController@update');
            Route::delete('/{id}', 'Api\FilmController@destroy');
        });

        View::name('layouts.modal', 'modal');

        Route::get('iconographic/create', function () {
            return View::make('api.iconographics.create');
        });

        Route::post('iconographic/store', [
            'as' => 'admin.api.iconographic.store',
            'uses' => 'Api\IconographicController@store']);

        Route::group(['prefix' => 'iconographic'], function () {
            Route::post('/{id}', 'Api\IconographicController@update');
            //The PUT verb not work. Someone said to is blame of CSRF protection.
            //Most recently, I read that was a php protection and a special file have to create to get the
            //the behavior desired
            //Route::put('/{id}',     'Api\IconographicController@update');
            Route::delete('/{id}', 'Api\IconographicController@destroy');
        });

        /*
        |------------------------------------------------------------------
        | Exhibitions
        |------------------------------------------------------------------
        */

        Route::group(['prefix' => 'exhibition'], function () {
            Route::get('', 'Api\ExhibitionController@index');
            Route::post('', 'Api\ExhibitionController@store');
            Route::put('/{id}', 'Api\ExhibitionController@update');
            Route::delete('/{id}', 'Api\ExhibitionController@destroy');

            Route::post('/{exhibition_id}/schedule', 'Api\ScheduleController@store');
        });

        Route::put('schedule/{id}', 'Api\ScheduleController@update');
        Route::delete('schedule/{id}', 'Api\ScheduleController@destroy');
    });
});