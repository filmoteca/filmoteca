<?php namespace Api;

use Filmoteca\Repository\ChronologiesRepository;

use Response;

use View;

class ChronologyController extends ApiController
{
	public function __construct(ChronologiesRepository $repository)
	{
		$this->repository = $repository;
	}

	public function all()
	{
		$resources = $this->repository->all();

		return Response::json($resources,200);
	}
}