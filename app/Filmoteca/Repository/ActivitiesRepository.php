<?php

namespace Filmoteca\Repository;

use Illuminate\Support\Collection;
use Carbon\Carbon;
use Filmoteca\Factories\ActivityFactory;

/**
 * Class ActivitiesRepository
 * @package Filmoteca\Repository
 */
class ActivitiesRepository
{
    /**
     * @var \Filmoteca\Repository\SchedulesRepository
     */
    protected $repository;

    /**
     * @param \Filmoteca\Repository\SchedulesRepository $repository
     * @param \Filmoteca\Factories\ActivityFactory
     */
    public function __construct(SchedulesRepository $repository, ActivityFactory $activityFactory)
    {
        $this->repository       = $repository;
        $this->activityFactory  = $activityFactory;
    }

    public function findInCurrentMonth()
    {
        $today  = Carbon::today();
        $from   = Carbon::createFromDate($today->year, $today->month);
        $until  = Carbon::createFromDate($today->year, $today->month, $today->daysInMonth);

        $activities = $this->findByDateInterval(
            $from->toDateString(),
            $until->toDateString()
        );

        return $activities;
    }

    /**
     * @param string $from
     * @param string $until
     * @return \Illuminate\Support\Collection
     */
    public function findByDateInterval($from, $until = null)
    {
        if ($until === null) {
            $today = Carbon::today();
            $until = Carbon::createFromDate($today->year, $today->month, $today->daysInMonth)->toDateString();
        }

        $schedulesByAuditorium = $this->repository->findByDateIntervalGroupByAuditorium($from, $until);

        $activities = $this->createActivities($schedulesByAuditorium);

        return $activities;
    }

    protected function createActivities(Collection $schedulesByAuditorium)
    {
        $activities = $schedulesByAuditorium->reduce(function (Collection $allActivities, $arrayAuditoriumSchedules) {

            $auditoriumSchedules = Collection::make($arrayAuditoriumSchedules);

            // List of schedules of a auditorium grouped by films.
            $schedulesByFilm = $auditoriumSchedules->groupBy(function ($item) {
                return $item->exhibition->exhibition_film->film->id;
            });

            $activities = $this->activityFactory->collection($schedulesByFilm);

            // merge return a new Collection
            return $allActivities->merge($activities);

        }, Collection::make([]));

        return $activities;
    }
}