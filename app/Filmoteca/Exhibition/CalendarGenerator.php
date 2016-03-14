<?php

namespace Filmoteca\Exhibition;

use Carbon\Carbon;
use Filmoteca\Exhibition\Type\Calendar\Calendar;
use Filmoteca\Exhibition\Type\Calendar\Day;
use Filmoteca\Exhibition\Type\Calendar\Week;

/**
 * Class ExhibitionCalendar
 * @package Filmoteca\Exhibition
 */
class CalendarGenerator
{
    const FIRST_DAY = 1;
    const FORWARD = 1;
    const BACKWARD = 2;

    /**
     * @param Carbon $date
     * @return array
     */
    public function generate(Carbon $date)
    {
        // Start in Monday then we must subtract one because we want to start in Sunday
        $firstSundayOfMonth = Carbon::create($date->year, $date->month, $date->day)
            ->startOfWeek()
            ->subDay();

        $weeks = $this->fillCalendar([], $firstSundayOfMonth);

        $calendar = new Calendar();
        $calendar->setWeeks($weeks);

        return $calendar;
    }

    /**
     * @param array $calendar
     * @param Carbon $date
     * @param int $weeks
     * @return array
     */
    protected function fillCalendar(array $calendar, Carbon $date, $weeks = 5)
    {
        if ($weeks === 0) {
            return $calendar;
        }

        $weekDays = $this->fillWeek([], $date);

        $week = new Week();
        $week->setDays($weekDays);
        $week->setNumber($date->weekOfMonth);

        $calendar[] = $week;

        $newDate = clone $date;

        return $this->fillCalendar($calendar, $newDate->addWeek(), --$weeks);
    }

    /**
     * @param array $week
     * @param Carbon $date
     * @return array
     */
    protected function fillWeek(array $week, Carbon $date)
    {
        $day = new Day();
        $day->setActive(true);
        $day->setExhibitionsNumber(1);
        $day->setDate($date);

        $week[$date->dayOfWeek] = $day;

        if (Carbon::SATURDAY === $date->dayOfWeek) {
            return $week;
        }

        $newDate = clone $date;

        return $this->fillWeek($week, $newDate->addDay());
    }
}
