<?php

use Filmoteca\Repository\ExhibitionsRepository;
use Filmoteca\Repository\NewsRepository;

class HomeController extends BaseController {

	public function __construct(
        ExhibitionsRepository $exhibitionRepository,
        NewsRepository $newsRepository){

		$this->exhibitionRepository = $exhibitionRepository;

        $this->newsRepository = $newsRepository;
	}

	public function index()
	{
		$exhibitions = $this->exhibitionRepository->search('today');

        $news = $this->newsRepository->lastNews(3);

		return View::make('pages.home.index', compact('exhibitions', 'news'));
	}

}
