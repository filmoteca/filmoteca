<?php

use Filmoteca\Repository\ExhibitionsRepository;
use Filmoteca\Repository\NewsRepository;
use Filmoteca\Exhibition\ExhibitionsManager;
use Filmoteca\Repository\AdvertisementRepository;
use Filmoteca\Repository\CarouselsRepository;

/**
 * Class HomeController
 */
class HomeController extends BaseController
{
    /**
     * @param ExhibitionsRepository $exhibitionRepository
     * @param NewsRepository $newsRepository
     * @param ExhibitionsManager $exhibitionsManager
     * @param AdvertisementRepository $advertisementRepository
     * @param CarouselsRepository $carouselRepository
     */
    public function __construct(
        ExhibitionsRepository $exhibitionRepository,
        NewsRepository $newsRepository,
        ExhibitionsManager $exhibitionsManager,
        AdvertisementRepository $advertisementRepository,
        CarouselsRepository $carouselRepository
    ) {
        $this->newsRepository = $newsRepository;
        $this->exhibitionRepository = $exhibitionRepository;
        $this->exhibitionsManager = $exhibitionsManager;
        $this->advertisementRepository = $advertisementRepository;
        $this->carouselRepository = $carouselRepository;
    }

    public function index()
    {
        $exhibitions = $this->exhibitionRepository->search('today');

        $auditoriums = $this->exhibitionsManager->getAuditoriums($exhibitions);

        $icons = $this->exhibitionsManager->getIcons($exhibitions);

        $news = $this->newsRepository->lastNews(6);

        $advertisements = $this->advertisementRepository->all();

        $carousels = $this->carouselRepository->findToHome();

        $viewData = compact('exhibitions', 'news', 'icons', 'auditoriums', 'advertisements', 'carousels');

        return View::make('pages.home.index', $viewData);
    }
}
