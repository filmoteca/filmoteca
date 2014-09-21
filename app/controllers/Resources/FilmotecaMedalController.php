<?php namespace Resources;

use Filmoteca\Repository\FilmotecaMedalsRepository;

class FilmotecaMedalController extends ResourceController
{
	protected $viewBaseName = 'filmoteca_medals';

	protected $resourceName = 'filmotecaMedal';

	public function __construct(FilmotecaMedalsRepository $repository)
	{
		$this->repository = $repository;
	}
}