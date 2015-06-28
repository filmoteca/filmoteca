<?php

namespace Api\Conaculta;

use Api\ApiController;
use Filmoteca\Repository\ActivitiesRepository;

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
		$activities = $this->repository->findByDate(Input::get('start', 'end'));



		return View::make('conaculta.activities.index', compact('activities'));
	}
}