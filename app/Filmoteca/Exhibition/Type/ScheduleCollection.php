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
        $schedules = $this->groupBy(function (Schedule $schedule) {
            return $schedule->getAuditorium()->getId();
        });

        $schedulesGrouped = $schedules->map(function ($group) {

            return new ScheduleGroup(new ScheduleCollection($group));
        });

        return $schedulesGrouped;
    }

    /**
     * @return static
     */
    public function groupByDate()
    {
        $schedulesGrouped = $this->groupBy(function (Schedule $schedule) {
            return $schedule->getEntry()->format(MYSQL_DATE_FORMAT);
        })->sortBy(function (array $schedules) {
            return $schedules[0]->getEntry();
        });

        $schedules = $schedulesGrouped->map(function (array $collection) {
            return new ScheduleCollection($collection);
        });

        return $schedules;
    }
}
