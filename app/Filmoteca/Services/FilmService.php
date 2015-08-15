<?php

namespace Filmoteca\Services;

use Filmoteca\Repository\FilmsRepository;
use Filmoteca\Transformers\FilmTransformer;
use Filmoteca\Repository\PageableRepositoryInterface;

class FilmService
{
    /**
     * @param FilmsRepository $repository
     * @param FilmTransformer $transformer
     */
    public function __construct(FilmsRepository $repository, FilmTransformer $transformer)
    {
        $this->repository   = $repository;
        $this->transformer  = $transformer;
    }

    /**
     * @param int $page
     * @param string $query
     * @param int $itemsPerPage
     * @return \Filmoteca\Pagination\Results
     */
    public function paginate(
        $page = PageableRepositoryInterface::FIRST_PAGE,
        $query = '',
        $itemsPerPage = PageableRepositoryInterface::ITEMS_PER_PAGE
    ) {
        $results = $this->repository->paginate($page, $query, $itemsPerPage);

        return $results;
    }
}