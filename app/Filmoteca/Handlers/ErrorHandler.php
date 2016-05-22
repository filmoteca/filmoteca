<?php

namespace Filmoteca\Handlers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
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
            throw new ModelNotFoundException();
        }

        return Redirect::to($redirect->new, 301);
    }
}
