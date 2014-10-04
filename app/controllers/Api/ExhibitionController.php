<?php namespace Api;

use Input;

use Response;

use Filmoteca\Repository\ExhibitionsRepository;

class ExhibitionController extends ApiController
{
	public function __construct(ExhibitionsRepository $repository)
	{
		$this->repository = $repository;
	}

	public function store()
	{
		$data = Input::except('_token');

		if( $this->repository->store( $data ))
		{
			return Response::json([], 200);
		}
	}
}