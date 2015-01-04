<?php

use Filmoteca\Repository\ExhibitionsRepository;

class HomeController extends BaseController {

	public function __construct(ExhibitionsRepository $exhibitionRepository){

		$this->exhibitionRepository = $exhibitionRepository;
	}

	public function index()
	{
		$exhibitions = $this->exhibitionRepository->search('today');

		return View::make('pages.home.index', compact('exhibitions'));
	}

}
