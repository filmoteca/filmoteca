<?php

use Filmoteca\Exceptions\NoBillboardFoundException;
use Filmoteca\Repository\BillboardsRepository;

class BillboardController extends BaseController
{
    protected $repository;

    public function __construct(BillboardsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $lastBillboard          = null; // I am going to be a Billboard Object.
        $earlierBillboards  = [];
        $currentYear            = date('Y');
        $previousYear           = (string) ( (int)$currentYear -1 );

        $thisYearBillboards     = $this->repository->thisYear();
        $previousYearBillboards = $this->repository->previousYear();

        if( $previousYearBillboards->isEmpty() && 
            $thisYearBillboards->isEmpty() ){
            throw new NoBillboardFoundException(date('Y'));
        }

        if ($thisYearBillboards->isEmpty()){
            $lastBillboard = $previousYearBillboards->first();
        }else{
            $lastBillboard = $thisYearBillboards->shift();
        }

        $earlierBillboards[$currentYear]    = $thisYearBillboards;
        $earlierBillboards[$previousYear]   = $previousYearBillboards;

        $viewData = compact(
            'lastBillboard', 
            'earlierBillboards'
        );

        return View::make('frontend.billboards.index', $viewData);
    }
}