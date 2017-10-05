<?php

namespace Filmoteca\Frontend\Controllers;

use Carbon\Carbon;
use Filmoteca\Models\Chronology;
use Filmoteca\Repository\ChronologiesRepository;
use Filmoteca\Utils\FilmotecaConfig;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;

/**
 * Class ChronologyController
 * @package Filmoteca\Frontend\Controllers
 */

class ChronologyController extends Controller{

    const INTERVALS = 9;
    /**
     * @var ChronologiesRepository
     */
    private $repository;

    /**
     * ChronologyController constructor.
     * @param ChronologiesRepository $repository
     */
    public function __construct(ChronologiesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        if (\Input::has('term')) {
            return $this->search();
        }

        $events = $this->repository->all();
        $minYear = Config::get('parameters.chronologies.minYear');
        $maxYear = Carbon::today()->year;
        $startMinYear = $maxYear - 5;
        $sliderConfig = [
            'chronology' =>
            [
                'slider' => [
                    'minYear' => $minYear,
                    'maxYear' => $maxYear,
                    'step' => floor(($maxYear-$minYear)/self::INTERVALS),
                    'value' => [$startMinYear, $maxYear]
                ]
            ]
        ];

        $filmotecaConfig = new FilmotecaConfig();
        $filmotecaConfig->addConfig($sliderConfig);

        return View::make('frontend.chronologies.index', compact('events', 'filmotecaConfig'));
    }

    /**
     * @param int $id
     */
    public function show($id)
    {
        $event = $this->repository->find($id);

        return View::make('frontend.chronologies.show', compact('event'));
    }

    public function search()
    {
        $term = \Input::get('term', '');
        $events = $this->repository->findByTag($term);

        $results = $events->map(function (Chronology $item) {
            return [
                'id' => $item->id,
                'year' => $item->year->format('Y'),
                'description' => $item->description
            ];
        });

        return \Response::json($results);
    }
}
