<?php

namespace Filmoteca\Repository;

use Filmoteca\Repository\ExhibitionsRepository;

class ActivitiesRepository
{
	/**
	 * @param ExhibitionsRepository $exhibition
	 */
	public function __construct(ExhibitionsRepository $exhibition)
	{
		$this->exhibition = $exhibition;
	}

	/**
	 * @param int $month
	 * @return \Illuminate\Support\Collection
	 */
	public function findByMonth($month = 0)
	{
		$activities = $this->exhibition->findByMonth($month);

		return $activities;
	}
}