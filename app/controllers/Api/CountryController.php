<?php

namespace Api;

use DB;
use Input;
use Response;

/**
 * Class CountryController
 * @package Api
 */
class CountryController extends ApiController
{
    /**
     * It returns a list of countries which name contains the parameter given.
     * @return Json              Json
     */
    public function index()
    {
        $partialName = Input::has('search')? Input::get('search'): '';

        $countries = DB::table('countries')
            ->select('id', 'name')
            ->where('name', 'like', '%' . $partialName . '%')
            ->get();

        return Response::Json($countries);
    }
}
