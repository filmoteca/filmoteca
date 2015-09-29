<?php

namespace Filmoteca\Repository;

use Filmoteca\Models\Redirect;

/**
 * Class RedirectsRepository
 * @package Filmoteca\Repository
 */
class RedirectsRepository
{
    /**
     * @param Redirect $redirect
     */
    public function __construct(Redirect $redirect)
    {
        $this->repository = $redirect;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        $redirects = $this->repository->all();

        return $redirects;
    }
}
