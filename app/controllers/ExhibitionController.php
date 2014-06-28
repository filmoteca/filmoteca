<?php

use Filmoteca\Repository\ExhibitionsRepository;

use Filmoteca\Models\Exhibitions\Auditorium;

use Filmoteca\ExhibitionsManager;

use Carbon\Carbon;

class ExhibitionController extends BaseController
{
	public function __construct(
		ExhibitionsRepository $exhibitionRepository,
		ExhibitionsManager $exhibitionsManager)
	{
		$this->repository = $exhibitionRepository;

		$this->manager = $exhibitionsManager;
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

		$exhibitions = $this->repository
			->search('date',$interval);
		
		$auditoriums = Auditorium::all(array('id','name'));

		$icons = $this->manager->getIcons($exhibitions);

		$weeks = array();

		return View::make(
			'exhibitions.index', 
			compact(
				'exhibitions',
				'auditoriums',
				'icons',
				'weeks'));
	}

	public function search($by)
	{
		$exhbitions = $this->repository
			->search($by, Input::get('value'));

		return View::make('exhibitions.search-result', $exhibitions);
	}
}