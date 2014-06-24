<?php

use Filmoteca\Repository\ExhibitionsRepository;

use Filmoteca\Repository\ExhibitionsSearcher;

use Response;

class ExhibitionController extends BaseController
{
	public function __construct(ExhibitionsRepository $exhibitionRepository)
	{
		$this->exhibitionRepository = $exhibitionRepository;
	}

	public function index()
	{
		return View::make('exhibitions.index');
	}

	public function search($by)
	{

		$exhbitions = $this->exhibitionRepository
			->search($by, Input::get('value'));

		return View::make('exhibitions.search-result', $exhibitions);
	}
}