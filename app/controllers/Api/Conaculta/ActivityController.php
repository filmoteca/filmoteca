<?php

namespace Api\Conaculta;

use Api\ApiController;
use Filmoteca\Repository\ActivititesRepository;

class ActivityController extends ApiController
{
	/**
	 * @param ActivitiesRepository $repository
	 */
	public function __construct(ActivitiesRepository $repository)
	{
		$this->repository = $repository;
	}

	/**
	 * @return mixed
	 */
	public function index()
	{
		$activities = $this->repository->findByMonth(Input::get('month'));

		return View::make('conaculta.activities.index', compact('activities'));
	}
}