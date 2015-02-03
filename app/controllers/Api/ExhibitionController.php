<?php 

namespace Api;

use Input;
use Response;
use Filmoteca\Repository\ExhibitionsRepository;

class ExhibitionController extends ApiController
{
	public function __construct(ExhibitionsRepository $repository)
	{
		$this->repository = $repository;
	}

	public function index()
	{
		$resources = $this->repository->paginate(15);

		return $resources;
	}

	public function store()
	{
		$data = Input::except('_token');

		if( $this->repository->store( $data ))
		{
			return Response::json([], 200);
		}
	}

	public function destroy($id){

		$resource = $this->repository->find($id);

		$resource->destroy($id);

		return Response::json($resource, 200);
	}

	public function show($id)
	{
		$resource = $this->repository->find($id);

		return Response::json($resource, 200);
	}

	public function update($id)
	{
		$data = Input::except('_token');

		$this->repository->update($id, $data);

		return Response::json([], 200);
	}
}
