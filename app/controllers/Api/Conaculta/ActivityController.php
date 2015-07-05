<?php

namespace Api\Conaculta;

use Input;
use Illuminate\View\Factory as View;
use Api\ApiController;
use Filmoteca\Repository\ActivitiesRepository;

/**
 * Class ActivityController
 * @package Api\Conaculta
 */
class ActivityController extends ApiController
{
	/**
	 * @param ActivitiesRepository $repository
     * @param View $view
	 */
	public function __construct(ActivitiesRepository $repository, View $view)
	{
		$this->repository   = $repository;
        $this->view         = $view;
	}

    /**
     * @return \Illuminate\View\View
     */
    public function currentMonth()
    {
        $activities = $this->repository->findInCurrentMonth();

        return $this->view->make('conaculta.activities.index', compact('activities'));
    }

    /**
     * @param string $from
     * @param string|null $until
     * @return \Illuminate\View\View
     */
	public function dateInterval($from, $until = null)
	{
		$activities = $this->repository->findByDateInterval($from, $until);

		return $this->view->make('conaculta.activities.index', compact('activities'));
	}
}