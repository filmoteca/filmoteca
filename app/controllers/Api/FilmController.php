<?php namespace Api;

use Filmoteca\Repository\FilmsRepository;

class FilmController extends ApiController
{
	public function __construct(FilmsRepository $repository)
	{
		$this->repository = $repository
	}
	public function films()
	{
		$films = $this->repository->pattern('title', $partial_title);

		return Response::json(
			['films' => $films]
			200)
	}
}