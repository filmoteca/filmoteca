<?php namespace Api;

use Response;
use Input;
use DB;

class CountryController extends ApiController{

    /**
     * It returns a list of countries which name contains the parameter given.
     * @return Json              Json
     */
    public function index(){

        $partialName = Input::has('search')? Input::get('search'): '';

        $str = '%' . $partialName . '%';

        $countries = DB::table('countries')
            ->select('id', 'name')
            ->where('name', 'like', $str)
            ->get();

        return Response::Json($countries);
    }
}