<?php namespace Api;

use Filmoteca\Repository\ConsultaLibrosRepository;

use Response;

use View;

class ConsultaLibroController extends ApiController
{
	public function __construct(ConsultaLibrosRepository $repository)
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