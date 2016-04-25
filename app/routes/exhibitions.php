<?php

Route::group(['prefix' => 'exhibition'], function () {

    Route::get('/', [
        'as' => 'exhibitions.frontend.exhibitions.index',
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

    Route::get('films-searcher', [
        'as' => 'exhibitions.frontend.exhibitions.filmssearcher',
        'uses' => 'Filmoteca\Exhibitions\Controllers\Frontend\ExhibitionController@searchFilms'
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

    Route::get('cycle', [
        'as' => 'exhibitions.frontend.cycle.index',
        'uses' => 'Filmoteca\Exhibitions\Controllers\Frontend\CycleController@index'
    ]);

    Route::get('cycle/{slug}', [
        'as' => 'exhibitions.frontend.cycle.show',
        'uses' => 'Filmoteca\Exhibitions\Controllers\Frontend\CycleController@show'
    ]);

    Route::get('film/{slug}', [
        'as' => 'exhibitions.frontend.film.show',
        'uses' => 'Filmoteca\Exhibitions\Controllers\Frontend\FilmController@show'
    ]);

    Route::get('billboard/subscribe', [
        'as' => 'exhibitions.frontend.billboard.subscribe',
        'uses' => 'Filmoteca\Exhibitions\Controllers\Frontend\BillboardController@subscribe'
    ]);

    Route::get('billboard', [
        'as' => 'exhibitions.frontend.billboard.index',
        'uses' => 'Filmoteca\Exhibitions\Controllers\Frontend\BillboardController@index'
    ]);
});
