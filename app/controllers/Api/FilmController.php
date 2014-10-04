<?php namespace Api;

use Filmoteca\Repository\FilmsRepository;

use stdClass;

use Input;

use Response;

class FilmController extends ApiController
{
	public function __construct(FilmsRepository $repository)
	{
		$this->repository = $repository;
	}

	public function search()
	{
		$films = $this->repository->search('title', Input::get('value'));

		return Response::json(
			['films' => $films],
			200);
	}

	public function store()
	{
		$data = Input::except('_token');

		$resource = $this->repository->store($data);

		$film = $this->repository->find($resource->id);	

		$film->images = new stdClass();

		$film->images->thumbnail = $film->image->url('thumbnail');

		return Response::json(
			['film' => $film],
			200);;
	}
}