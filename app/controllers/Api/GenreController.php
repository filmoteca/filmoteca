<?php

namespace Api;

use DB;
use Input;
use Response;

/**
 * Class GenreController
 * @package Api
 */
class GenreController extends ApiController
{
    /**
     * It returns a list of genres which name contains the parameter given.
     * @return Json              Json
     */
    public function index()
    {
        $partialName = Input::has('search')? Input::get('search'): '';

        $genres = DB::table('genres')
            ->select('id', 'name')
            ->where('name', 'like',  '%' . $partialName . '%')
            ->get();

        return Response::Json($genres);
    }
}
