<?php

foreach (Config::get('redirects') as $redirect) {

    Route::get($redirect['old'], function () use ($redirect) {
        return Redirect::to($redirect['new'], 301);
    });
}
