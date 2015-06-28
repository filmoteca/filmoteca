<?php

namespace Filmoteca\Repository;

use Filmoteca\Factories\ActivityFactory;
use Filmoteca\Repository\SchedulesRepository;
use Illuminate\Support\Collection;

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
     */
    public function __construct(SchedulesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param string $start
     * @param string $end
     * @return \Illuminate\Support\Collection
     */
    public function findByInterval($start, $end)
    {
        $auditoriumsSchedules = $this->repository->findByDateGroupByAuditorium($start, $end);

        $activities = $auditoriumsSchedules->reduce(function (Collection $allActivities, Collection $auditoriumSchedules) {

            // List of schedules of a auditorium grouped by films.
            $schedulesGroupedByFilm = $this->groupByFilm($auditoriumSchedules);

            $activities = ActivityFactory::collection($schedulesGroupedByFilm);

            $allActivities->merge($activities);

            return $allActivities;

        }, Collection::make([]));

        return $activities;
    }

    /**
     * @param \Illuminate\Support\Collection $schedules
     * @return \Illuminate\Database\Eloquent\Collection
     */
    protected function groupAuditoriumSchedulesByFilm(Collection $schedules)
    {
        $groupedByFilm = $schedules->reduce(function ($accumulator, $schedule) {

            $filmId = $schedule->exhibition->exhibition_film->film->id;

            if (!isset($accumulator[$filmId])) {
                $accumulator[$filmId] = Collection::make([]);
            }

            $accumulator[$filmId]->add($schedule);

            return $accumulator;
        });

        return $groupedByFilm;
    }
}