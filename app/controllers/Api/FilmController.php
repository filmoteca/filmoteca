<?php namespace Api;

use Filmoteca\Services\FilmService;
use Input;
use Filmoteca\Transformers\FilmTransformer;
use Illuminate\Pagination\Factory as Paginator;
use Filmoteca\Repository\PageableRepositoryInterface;

class FilmController extends ApiController
{
    /**
     * @param FilmService $filmService
     * @param Paginator $paginator
     * @param FilmTransformer $transformer
     */
	public function __construct(FilmService $filmService, Paginator $paginator, FilmTransformer $transformer)
	{
		$this->filmService     = $filmService;
        $this->paginator        = $paginator;
        $this->transformer      = $transformer;
	}

    /**
     * @return \Illuminate\Pagination\Paginator
     */
    public function index()
    {
        $page 			= Input::has('page')? Input::get('page') : PageableRepositoryInterface::FIRST_PAGE;
        $query          = Input::has('query')? Input::get('query') : '';
        $results        = $this->filmService->paginate($page, $query);

        $transformedItems = $this->transformer->transformCollection($results->getItems());

        $results->setItems($transformedItems);

        return $this->paginator->make(
            $results->getItems()->toArray(),
            $results->getTotal(),
            PageableRepositoryInterface::ITEMS_PER_PAGE
        );
    }
}
