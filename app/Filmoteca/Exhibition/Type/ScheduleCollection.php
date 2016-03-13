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
     * @return array
     */
    public function groupByAuditorium()
    {
        $schedules = $this->groupBy(function (Schedule $schedule) {
            return $schedule->getAuditorium()->getId();
        });

        $schedulesGrouped = $schedules->map(function ($group) {

            return new ScheduleGroup($group);
        });

        return $schedulesGrouped;
    }
}
