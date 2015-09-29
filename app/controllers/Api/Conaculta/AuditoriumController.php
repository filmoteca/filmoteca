<?php namespace Api\Conaculta;

use Filmoteca\Repository\AuditoriumsRepository;
use Api\ApiController;
use Response;
use View;

/**
 * Class AuditoriumController
 * @package Api\Conaculta
 */
class AuditoriumController extends ApiController
{
	/**
	 * @param AuditoriumsRepository $repository
	 */
	public function __construct(AuditoriumsRepository $repository)
	{
		$this->repository = $repository;
	}

	/**
	 * @return mixed
	 */
	public function index()
	{
		$auditoriums = $this->repository->all();

		$response =  Response::view('conaculta.auditoriums.index', compact('auditoriums'))
			->header('Content-type', 'application/xml');

		return $response;
	}

	/**
	 * @param $id
	 * @return mixed
	 * @throws \Exception
	 */
	public function show($id)
	{
		$auditorium = $this->repository->find($id);

		$response = Response::view('conaculta.auditoriums.show', compact('auditorium'))
			->header('Content-type', 'application/conaculta+xml');

		return $response;
	}
}
