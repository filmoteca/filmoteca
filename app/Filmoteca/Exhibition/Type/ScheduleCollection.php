<?php

namespace Filmoteca\Exhibition\Type;

use Illuminate\Support\Collection;

/**
 * Class ScheduleCollection
 * @package Filmoteca\Exhibition\Type
 */
class ScheduleCollection extends Collection
{
    /**
     * @return ScheduleCollection
     */
    public function groupByAuditorium()
    {
        $schedules = $this
            ->groupBy(function (Schedule $schedule) {
                return $schedule->getAuditorium()->getId();
            })
            ->map(function ($group) {
                return new ScheduleCollection($group);
            });

        return $schedules;
    }

    /**
     * @return static
     */
    public function groupByDate()
    {
        $schedules = $this
            ->groupBy(function (Schedule $schedule) {
                return $schedule->getEntry()->format(MYSQL_DATE_FORMAT);
            })
            ->map(function (array $collection) {
                return new ScheduleCollection($collection);
            });

        return $schedules;
    }
}
