<?php

namespace Filmoteca\Exhibition\Type;

/**
 * Class ScheduleGroup
 * @package Filmoteca\Exhibition\Type
 */
class ScheduleGroup
{
    /**
     * @var array|Schedule[]
     */
    protected $schedules;

    /**
     * @param array|Schedule[] $schedules
     */
    public function __construct(array $schedules)
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
     * @return array|Schedule[]
     */
    public function getSchedules()
    {
        return $this->schedules;
    }

    /**
     * @param array|Schedule[] $schedules
     */
    public function setSchedules($schedules)
    {
        $this->schedules = $schedules;
    }
}
