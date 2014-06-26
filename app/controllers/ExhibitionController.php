<?php

use Filmoteca\Repository\ExhibitionsRepository;

use Filmoteca\Repository\ExhibitionsSearcher;

use Response;

use Carbon\Carbon;

class ExhibitionController extends BaseController
{
	public function __construct(ExhibitionsRepository $exhibitionRepository)
	{
		$this->exhibitionRepository = $exhibitionRepository;
	}

	public function index()
	{
		$today = Carbon::now();

		$interval = array(
				Carbon::createFromDate(
					$today->year,
					$today->month,
					1)->toDateString(),
				Carbon::createFromDate(
					$today->year,
					$today->month,
					$today->daysInMonth)->toDateString()
			);

		$exhibitions = $this->exhibitionRepository
			->search('date',$interval);

		return View::make('exhibitions.index', compact('exhibitions'));
	}

	public function search($by)
	{

		$exhbitions = $this->exhibitionRepository
			->search($by, Input::get('value'));

		return View::make('exhibitions.search-result', $exhibitions);
	}
}