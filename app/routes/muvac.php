<?php

/*
|-----------------------------------------------------------------------
| MUVAC
|-----------------------------------------------------------------------
*/

Route::get('/muvac', [
    'as' => 'muvac',
    'uses' => function () {
        return Redirect::to('/MUVAC');
    }]);


Route::get('/MUVAC', 'MuvacController@index');


