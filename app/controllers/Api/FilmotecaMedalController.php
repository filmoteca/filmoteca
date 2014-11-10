<?php namespace Api;

use Filmoteca\Repository\FilmotecaMedalsRepository;

use Response;

use View;

class FilmotecaMedalController extends ApiController
{
	public function __construct(FilmotecaMedalsRepository $repository)
	{
		$this->repository = $repository;
	}

	public function all()
	{
		$resources = $this->repository->all();

		return Response::json($resources,200);
	}

	public function detail($id)
	{
		$resource = $this->repository->find($id);

		return Response::json($resource, 200);
	}
}