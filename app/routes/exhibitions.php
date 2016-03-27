<?php

Route::group(['prefix' => 'exhibition'], function () {

    Route::get('{date?}', [
        'as' => 'exhibition.by_date',
        'uses' => 'Filmoteca\Exhibitions\Controllers\ExhibitionController@index'
        // Match example: 2-marzo-2015, 23-febrero-1998
    ])->where('date', '[0-9]{1,2}-[a-z]+-[0-9]{4}');

    Route::get('history', 'Filmoteca\Exhibitions\Controllers\ExhibitionController@history');

    Route::get('find', [
        'as' => 'exhibition.find',
        'uses' => 'ExhibitionController@find'
    ])->where('date', 'history');

    Route::get('{id}/show', [
        'as' => 'exhibition.show',
        'uses' => 'ExhibitionController@detail'
    ]);
    Route::get('{id}/detail-history', [
        'as' => 'exhibition.detail-history',
        'uses' => 'ExhibitionController@detailHistory'
    ]);

    Route::get('/filter/{name?}/{id?}/{title?}', 'ExhibitionController@index');

    Route::get('{id}/schedule', [
        'as' => 'exhibition.schedule.search',
        'uses' => 'Filmoteca\Exhibitions\Controller\Frontend\ScheduleController@search'
    ]);
});
