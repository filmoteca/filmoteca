<?php

namespace Filmoteca\Handlers;

use Request;
use Response;
use Redirect;
use Filmoteca\Repository\RedirectsRepository;

/**
 * Class ErrorController
 */
class ErrorHandler
{
    /**
     * @param RedirectsRepository $redirect
     */
    public function __construct(RedirectsRepository $redirect)
    {
        $this->redirect = $redirect;
    }

    /**
     * @return Response
     */
    public function missing()
    {
        if (str_contains(Request::header('Accept'), 'text/html')) {
            return $this->html();
        }

        return Response::make('Resource not found', 404);
    }

    /**
     * @return Response
     */
    protected function html()
    {
        $redirects = $this->redirect->all();

        $redirect = $redirects->first(function ($index, $redirect) {
            return $redirect->old == '/' . Request::path();
        });

        if ($redirect === null) {
            $viewData = [
                'title'     => 'Página no encontrada',
                'message'   => 'Página no encontrada.',
                'code'      => '404'
            ];

            return Response::view('syntara::dashboard.error', $viewData, 404);
        }

        return Redirect::to($redirect->new, 301);
    }
}
