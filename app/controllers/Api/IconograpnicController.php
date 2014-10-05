<?php namespace Api;

use Filmoteca\Repository\IconographicsRepository;

use Response;

class IconographicController extends ApiController
{
	public function __construct(IconographicsRepository $repository)
	{
		$this->repository = $repository;
	}
	public function all()
	{
		$resources = $this->repository->all();

		return Response::json($resources,200);
	}
}