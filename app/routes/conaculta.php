<?php
// Conaculta

Route::group(['prefix' => 'api'], function(){

	Route::get('/auditoriums', 'Api\Conaculta\AuditoriumController@index');
	Route::get('/auditoriums/{id}', 'Api\Conaculta\AuditoriumController@show');

    Route::get('/activities', 'Api\Conaculta\ActivityController@currentMonth');
	Route::get('/activities/{from}/{until?}', 'Api\Conaculta\ActivityController@dateInterval');
});

