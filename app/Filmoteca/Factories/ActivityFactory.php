<?php

namespace Filmoteca\Factories;

use Illuminate\Support\Collection;
use Filmoteca\Models\Activity;
use Filmoteca\Models\Exhibitions\Schedule;
use Filmoteca\ConacultaFormatter as Formatter;

/**
 * Class ActivityFactory
 * @package Filmoteca\Factories
 */
class ActivityFactory
{
    const CATEGORY = 'CINE';

    /**
     * @param Collection $schedules
     * @return \Filmoteca\Models\Activity
     */
    public static function single(Collection $schedules)
    {
        $activity       = new Activity();
        $firstSchedule  = $schedules->first();
        $film           = $firstSchedule->exhibition->exhibition_film->film;
        $auditorium     = $firstSchedule->auditorium;

        $activity
            ->setId($film->id . $auditorium->id)
            ->setTitle($firstSchedule->exhibition->exhibition_film->title)
            ->setFacility($auditorium)
            ->setPublicType('General')
            ->setContact(self::getContact($firstSchedule))
            ->setSchedules(Formatter::toDateTime($schedules))
            ->setExtraSchedules(Formatetr::toExtraTime($schedules))
            ->setPrices(Formatter::toPrices($schedules))
            ->setDiscounts(Formatter::toDiscounts($schedules))
            ->setCommentaries($firstSchedule->exhibition->notes)
            ->setCategory(self::CATEGORY)
            ->setImage($firstSchedule->image)
            ->setReview($firstSchedule->exhibition->exhibition_film->film->synopsis);

        return $activity;
    }

    /**
     * @param Collection $collection
     * @return \Illuminate\Support\Collection
     */
    public static function collection(Collection $collection)
    {
        $activities = $collection->map(function ($item) {
            return self::single($item);
        });

        return $activities;
    }

    public static function getContact(Schedule $schedule)
    {
        $contact = sprintf('Teléfono de la sala: %s.', $schedule->auditorium->telephone);
        $contact.= sprintf('\nTeléfono de la filmoteca: %s', Config::get('institute.telephone'));

        return $contact;
    }
}