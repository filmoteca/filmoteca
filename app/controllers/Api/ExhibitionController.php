<?php 

namespace Api;

use Filmoteca\Repository\ExhibitionsRepository;
use Input;
use Response;
use Paginator;

class ExhibitionController extends ApiController
{
	public function __construct(ExhibitionsRepository $repository)
	{
		$this->repository = $repository;
	}

	public function index()
	{
		$itemsPerPage 	=  15;
		$page 			= Input::has('page')? Input::get('page') : 1;
		$exhibitions 			= $this->repository->paginate($page, $itemsPerPage);

		return Paginator::make($exhibitions->items, $exhibitions->total, $itemsPerPage);
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
