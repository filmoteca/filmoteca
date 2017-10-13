<?php

namespace Filmoteca\Frontend\Controllers;

use Carbon\Carbon;
use Filmoteca\Models\ConsultaLibro;
use Filmoteca\Repository\ConsultaLibrosRepository;
use Filmoteca\Utils\FilmotecaConfig;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;

/**
 * Class ConsultaLibroController
 * @package Filmoteca\Frontend\Controllers
 */
class ConsultaLibroController extends Controller
{
    /**
     * @var ConsultaLibrosRepository
     */
    private $repository;

    /**
     * ConsultaLibroController constructor.
     * @param ConsultaLibrosRepository $repository
     */
    public function __construct(ConsultaLibrosRepository $repository)
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

        $alphabet = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','V','W','X','Y','Z');

        $books = $this->repository->all();
        $minValue = Config::get('parameters.consulta-libros.minValue');
        $maxValue = count($alphabet)-1;
        $startMinValue = $alphabet[0];
        $sliderConfig = [
            'consultaLibro' =>
            [
                'slider' => [
                    'minValue' => $minValue,
                    'maxValue' => $maxValue,
                    'step' => 1,
                    'value' => $startMinValue                ]
            ]
        ];

        $filmotecaConfig = new FilmotecaConfig();
        $filmotecaConfig->addConfig($sliderConfig);

        return View::make('frontend.consulta_libros.index', compact('books', 'filmotecaConfig'));
    }

    /**
     * @param int $id
     */
    public function show($id)
    {
        $book = $this->repository->find($id);

        return View::make('frontend.consulta_libros.show', compact('book'));
    }

    public function search()
    {
        $term = \Input::get('term', '');
        $books = $this->repository->findByTitle($term);

        $results = $books->map(function (ConsultaLibro $item) {
            return [
                'id' => $item->id,
                'title' => $item->title,
                'indice' => $item->indice,
                'sinopsis' => $item->sinopsis,
                'book_date' => $item->book_date->format('d m Y'),
                'pages' => $item->pages,
                'url_image' => $item->image->url('thumbnail')
            ];
        });

        return \Response::json($results);
    }
}
