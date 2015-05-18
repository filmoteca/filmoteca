<?php

use Filmoteca\Repository\ExhibitionsRepository;
use Filmoteca\Repository\NewsRepository;
use Filmoteca\ExhibitionsManager;
use Filmoteca\Repository\AdvertisementRepository;
use Filmoteca\Repository\CarouselsRepository;

class HomeController extends BaseController {

	public function __construct(
        ExhibitionsRepository $exhibitionRepository,
        NewsRepository $newsRepository,
        ExhibitionsManager $exhibitionsManager,
        AdvertisementRepository $advertisementRepository,
        CarouselsRepository $carouselRepository
    ) {
        $this->newsRepository           = $newsRepository;
		$this->exhibitionRepository     = $exhibitionRepository;
        $this->exhibitionsManager       = $exhibitionsManager;
        $this->advertisementRepository  = $advertisementRepository;
        $this->carouselRepository       = $carouselRepository;
	}

	public function index()
	{
		$exhibitions = $this->exhibitionRepository->search('today');

        $auditoriums = $this->exhibitionsManager->getAuditoriums($exhibitions);

        $icons = $this->exhibitionsManager->getIcons($exhibitions);

        $news = $this->newsRepository->lastNews(3);

        $advertisements = $this->advertisementRepository->all();

        $carousels = $this->carouselRepository->findToHome();

        $viewData = compact('exhibitions', 'news', 'icons', 'auditoriums', 'advertisements', 'carousels');

		return View::make('pages.home.index', $viewData);
	}
}
