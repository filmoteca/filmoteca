<?php namespace Api;

use Filmoteca\Repository\AuditoriumsRepository;

class AuditoriumController extends ApiController
{
	public function __construct(AuditoriumsRepository $repository)
	{
		$this->repository = $repository
	}
	public function auditoriums()
	{
		$resources = $this->repository->list('title', $partial_title);

		return Response::json(
			['resources' => $resources]
			200)
	}
}