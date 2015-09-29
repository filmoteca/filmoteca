<?php

/*
|----------------------------------------------------------------------------
| ADMIN ZONE
|----------------------------------------------------------------------------
 */

Route::group(['prefix' => 'admin', 'before' => 'validate_admin'], function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
     */

    Route::get('/', [
        'as' => 'admin.dashboard',
        'uses' => function () {
            Redirect::to('/admin/dashboard/login');
        }]);

    /*
    |--------------------------------------------------------------------------
    | Aplicación de cursos (ADMIN)
    |--------------------------------------------------------------------------
     */
    Route::get('course/app', function () {

        return View::make('courses.admin-app');
    });

    /*
    |--------------------------------------------------------------------------
    | Aplicación de exhibiciones (ADMIN)
    |--------------------------------------------------------------------------
     */
    Route::get('/exhibition/app', [
        'as' => 'admin.exhibition.app',
        'uses' => function () {
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
    array_map(function ($resource) {

        Route::resource($resource, sprintf('Resources\%sController', ucfirst($resource)));
    }, $resources);

    Route::get('billboard/send', [
        'as'=> 'admin.billboard.send',
        'uses' => 'Resources\BillboardConstroller@Send']);

    Route::get('/press_register/index', [
            'as' => 'admin.press_register.index',
            'uses' => 'PressRegisterController@index'
    ]);

    Route::delete('/press_register/destroy/{id}', [
            'as' => 'admin.press_register.destroy',
            'uses' => 'PressRegisterController@destroy'
    ]);
});
