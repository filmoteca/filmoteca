<?php

namespace Filmoteca\Repository;

use Filmoteca\Models\Exhibitions\Schedule;
use Illuminate\Support\Collection;

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
    public function _construct(Schedule $schedule)
    {
        $this->schedule = $schedule;
    }

    /**
     * @param string $from
     * @param string $until
     * @param string $order Default Descending. Valid values: DESC | ASC.
     * @return \Illuminate\Support\Collection
     */
    public function findByDateGroupByAuditorium($from, $until, $order = 'DESC')
    {
        $schedules = $this->findByDate($from, $until, $order);

        $groupedSchedules = $this->groupByAuditorium($schedules);

        return $groupedSchedules;
    }

    /**
     * @param string $from
     * @param string $until
     * @param string $order Default Descending. Valid values: DESC | ASC.
     * @return \Illuminate\Support\Collection
     */
    public function findByDate($from, $until, $order)
    {
        $interval = array($from, $until . ' 23:59:59');

        $schedules = $this->schedule
            ->whereBetween('entry', $interval)
            ->orderBy('created_at', $order)
            ->with(
                'exhibition',
                'exhibition.exhibitionFilm',
                'exhibition.exhibitionFilm.film',
                'exhibition.exhibitionFilm.film.genre',
                'exhibition.exhibitionFilm.film.country',
                'auditorium'
            )
            ->get();

        return $schedules;
    }

    /**
     * @param Collection $collection
     * @return \Illuminate\Support\Collection
     */
    protected function groupByAuditorium(Collection $collection)
    {
        $groupedSchedules = $collection->reduce(function ($accum, $item) {

            $auditoriumId = $item->auditorium->id;

            if (!isset($accum[$auditoriumId])) {
                $accum[$auditoriumId] = Collection::make([]);
            }

            $accum[$auditoriumId]->add($item);

            return $accum;

        }, []);

        return Collection::make($groupedSchedules);
    }
}