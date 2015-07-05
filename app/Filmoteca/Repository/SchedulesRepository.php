<?php

namespace Filmoteca\Repository;

use Filmoteca\Models\Exhibitions\Schedule;

/**
 * Class SchedulesRepository
 * @package Filmoteca\Repository
 */
class SchedulesRepository
{
    /**
     * @var \Filmoteca\Models\Exhibitions\Schedule
     */
    protected $schedule;

    /**
     * @param Schedule $schedule
     */
    public function __construct(Schedule $schedule)
    {
        $this->schedule = $schedule;
    }

    /**
     * @param string $from
     * @param string $until
     * @param string $order Default Descending. Valid values: DESC | ASC.
     * @return \Illuminate\Support\Collection
     */
    public function findByDateIntervalGroupByAuditorium($from, $until, $order = 'DESC')
    {
        $schedules = $this->findByDateInterval($from, $until, $order);

        $groupedSchedules = $schedules->groupBy(function($schedule) {
            return $schedule->auditorium->id;
        });

        return $groupedSchedules;
    }

    /**
     * @param string $from
     * @param string $until
     * @param string $order Default Descending. Valid values: DESC | ASC.
     * @return \Illuminate\Support\Collection
     */
    public function findByDateInterval($from, $until, $order = 'DESC')
    {
        $interval = [$from, $until . ' 23:59:59'];

        $schedules = $this->schedule
            ->whereBetween('entry', $interval)
            ->orderBy('created_at', $order)
            ->with(
                'exhibition',
                'exhibition.exhibitionFilm',
                'exhibition.exhibitionFilm.film',
                'exhibition.exhibitionFilm.film.genre',
                'exhibition.exhibitionFilm.film.countries',
                'auditorium'
            )
            ->get();

        return $schedules;
    }
}