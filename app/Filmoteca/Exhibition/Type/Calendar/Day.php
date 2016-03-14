<?php

namespace Filmoteca\Exhibition\Type\Calendar;

use Carbon\Carbon;

/**
 * Class Day
 * @package Filmoteca\Exhibition\Type\Calendar
 */
class Day
{
    /**
     * @var Carbon
     */
    protected $date;

    /**
     * @var int
     */
    protected $exhibitionsNumber = 0;

    /**
     * @var bool
     */
    protected $active;

    /**
     * @return Carbon
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param Carbon $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getDateInFormatToUrl()
    {
        return $this->date->format('j M');
    }

    /**
     * @return int
     */
    public function getExhibitionsNumber()
    {
        return $this->exhibitionsNumber;
    }

    /**
     * @param int $exhibitionsNumber
     */
    public function setExhibitionsNumber($exhibitionsNumber)
    {
        $this->exhibitionsNumber = $exhibitionsNumber;
    }

    /**
     * @return bool
     */
    public function hasExhibitions()
    {
        return $this->exhibitionsNumber > 0;
    }

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    public function getNumber()
    {
        return $this->date->day;
    }
}