<?php

namespace Filmoteca\Exhibition\Type\Calendar;

/**
 * Class Calendar
 * @package Filmoteca\Exhibition\Type\Calendar
 */
class Calendar
{
    /**
     * @var array[Week]
     */
    protected $weeks;

    /**
     * @return array
     */
    public function getWeeks()
    {
        return $this->weeks;
    }

    /**
     * @param array $weeks
     */
    public function setWeeks($weeks)
    {
        $this->weeks = $weeks;
    }

    /**
     * @return mixed
     */
    public function getDays()
    {
        $days = array_reduce($this->weeks, function ($days, Week $week) {
            $days = array_merge($days, $week->getDays());

            return $days;
        }, []);

        return $days;
    }
}
