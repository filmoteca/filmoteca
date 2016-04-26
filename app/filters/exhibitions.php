<?php

View::composer('*', function ($view) {
    $view->with('siteName', 'Filmoteca UNAM');

    $exhibitionsConfig = [
        'routes' => [
            'exhibitions_frontend_exhibitions_filmssearcher' =>
                URL::route('exhibitions.frontend.exhibitions.filmssearcher'),
            'exhibitions_frontend_exhibitions_index' => URL::route('exhibitions.frontend.exhibitions.index')
        ]
    ];

    $view->with('exhibitionsConfig', $exhibitionsConfig);
});

View::composer('exhibitions.*', 'Filmoteca\Exhibitions\Composer\ExhibitionComposer');
