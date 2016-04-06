<?php

Route::group(['prefix' => 'exhibition'], function () {

    Route::get('/', [
        'as' => 'exhibition',
        'uses' => 'Filmoteca\Exhibitions\Controllers\Frontend\ExhibitionController@index'
    ]);

    Route::get('{date?}', [
        'as' => 'exhibition.by_date',
        'uses' => 'Filmoteca\Exhibitions\Controllers\Frontend\ExhibitionController@index'
        // Match example: 2-marzo-2015, 23-febrero-1998
    ])->where('date', '[0-9]{1,2}-[a-z]+-[0-9]{4}');

    Route::get('history', [
        'as' => 'exhibition.history',
        'uses' => 'Filmoteca\Exhibitions\Controllers\Frontend\ExhibitionController@history'
    ]);

    Route::get('{id}/show', [
        'as' => 'exhibition.show',
        'uses' => 'Filmoteca\Exhibitions\Controllers\Frontend\ExhibitionController@show'
    ]);

    Route::get('{id}/schedule', [
        'as' => 'exhibition.schedule.search',
        'uses' => 'Filmoteca\Exhibitions\Controllers\Frontend\ScheduleController@search'
    ]);

    Route::get('auditorium', [
        'as' => 'exhibition.auditorium.index',
        'uses' => 'Filmoteca\Exhibitions\Controllers\Frontend\AuditoriumController@index'
    ]);

    Route::get('auditorium/{slug}', [
        'as' => 'exhibition.auditorium.show',
        'uses' => 'Filmoteca\Exhibitions\Controllers\Frontend\AuditoriumController@show'
    ]);
});
