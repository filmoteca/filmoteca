<?php

use Filmoteca\Repository\ExhibitionsRepository;
use Filmoteca\Repository\NewsRepository;
use Filmoteca\ExhibitionsManager;

class HomeController extends BaseController {

	public function __construct(
        ExhibitionsRepository $exhibitionRepository,
        NewsRepository $newsRepository,
        ExhibitionsManager $exhibitionsManager
    ) {
        $this->newsRepository       = $newsRepository;
		$this->exhibitionRepository = $exhibitionRepository;
        $this->exhibitionsManager   = $exhibitionsManager;
	}

	public function index()
	{
		$exhibitions = $this->exhibitionRepository->search('today');

        $auditoriums = $this->exhibitionsManager->getAuditoriums($exhibitions);

        $icons = $this->exhibitionsManager->getIcons($exhibitions);

        $news = $this->newsRepository->lastNews(3);

		return View::make('pages.home.index', compact('exhibitions', 'news', 'icons', 'auditoriums'));
	}

}
