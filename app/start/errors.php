<?php

/*
|--------------------------------------------------------------------------
| Application Error Handler
|--------------------------------------------------------------------------
|
| Here you may handle any errors that occur in your application, including
| logging them or displaying custom views for specific errors. You may
| even register several error handlers to handle different types of
| exceptions. If nothing is returned, the default error view is
| shown, which includes a detailed stack trace during debug.
|
*/

App::error(function (\Illuminate\Database\Eloquent\ModelNotFoundException $exception, $code) {

    log_and_send_email($exception);

    $viewData = [
        'title'     => 'errors.page_not_found',
        'message'   => 'errors.page_not_found',
        'code'      => '404'
    ];

    return Response::view('syntara::dashboard.error', $viewData);
});


App::error(function (Exception $exception, $code) {
    log_and_send_email($exception);
});

function log_and_send_email($exception)
{
    Log::error($exception);

    if (App::environment() == 'prod') {
        $data = ['exception' => $exception];
        Mail::send('emails.error', $data, function ($message) {
            $message->from(Config::get('mail.from.address'));
            $message
                ->to(Config::get('mail.error.address'))
                ->subject(Config::get('mail.error.subject'));
        });
    }
}
