<?php namespace Resources;

use Filmoteca\Repository\FilmsRepository;

class FilmController extends ResourceController
{
	protected $viewBaseName = 'films';

	protected $resourceName = 'film';

	public function __construct(FilmsRepository $filmsRepository)
	{
		$this->repository = $filmsRepository;
	}
}