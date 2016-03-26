<?php

namespace Filmoteca\Exhibition\Type;

/**
 * Class ScheduleGroup
 * @package Filmoteca\Exhibition\Type
 */
class ScheduleGroup
{
    /**
     * @var ScheduleCollection
     */
    protected $schedules;

    /**
     * @param ScheduleCollection $schedules
     */
    public function __construct(ScheduleCollection $schedules)
    {
        $this->schedules = $schedules;
    }

    /**
     * @return Auditorium
     */
    public function getAuditorium()
    {
        $auditorium = $this->schedules[0]->getAuditorium();

        return $auditorium;
    }

    /**
     * @return ScheduleCollection
     */
    public function getSchedules()
    {
        return $this->schedules;
    }

    /**
     * @param ScheduleCollection $schedules
     */
    public function setSchedules(ScheduleCollection $schedules)
    {
        $this->schedules = $schedules;
    }
}
