<?php

use Filmoteca\Repository\NewsRepository;
use Filmoteca\Repository\AdvertisementRepository;
use Filmoteca\Repository\CarouselsRepository;

/**
 * Class HomeController
 */
class MuvacController extends BaseController
{
    /**
     * @param NewsRepository $newsRepository
     * @param ExhibitionsManager $exhibitionsManager
     * @param AdvertisementRepository $advertisementRepository
     * @param CarouselsRepository $carouselRepository
     */
    public function __construct(
        NewsRepository $newsRepository,
        AdvertisementRepository $advertisementRepository,
        CarouselsRepository $carouselRepository
    ) {
        $this->newsRepository = $newsRepository;
        $this->advertisementRepository = $advertisementRepository;
        $this->carouselRepository = $carouselRepository;
    }

    public function index()
    {

        $news           = $this->newsRepository->lastNews(6);
        $advertisements = $this->advertisementRepository->all();
        $carousels      = $this->carouselRepository->findToHome();

        $viewData = compact('news', 'advertisements', 'carousels');

        return View::make('pages.muvac.index', $viewData);
    }
}
