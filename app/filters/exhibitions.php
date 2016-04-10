<?php

View::composer('*', function ($view) {
    $view->with('siteName', 'Filmoteca UNAM');

    $config = [
        'routes' => [
            'exhibitions_frontend_exhibitions_filmssearcher' =>
                URL::route('exhibitions.frontend.exhibitions.filmssearcher'),
            'exhibitions_frontend_exhibitions_index' => URL::route('exhibitions.frontend.exhibitions.index')
        ]
    ];

    $view->with('config', $config);
});

View::composer('exhibitions.*', 'Filmoteca\Exhibitions\Composer\ExhibitionComposer');
