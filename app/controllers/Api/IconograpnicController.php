<?php namespace Api;

use Filmoteca\Repository\IconographicsRepository;
use Input;
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

	/**
	 * TODO: refactor. Use inherence.
	 * @return [type] [description]
	 */
	public function store()
	{
		$data = Input::except('_token');

		$resource = $this->repository->store($data);

		$icon = $this->repository->find($resource->id);

		return Response::json($icon,200);;
	}

}