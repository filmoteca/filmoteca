<?php

App::missing(function () {

    $handler = App::make('Filmoteca\Handlers\ErrorHandler');

    return $handler->missing();
});