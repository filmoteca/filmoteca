<?php

namespace Filmoteca\Factories;

use Illuminate\Support\Collection;
use Filmoteca\Models\Activity;
use Filmoteca\Models\Exhibitions\Schedule;
use Filmoteca\ConacultaFormatter as Formatter;
use Illuminate\Config\Repository as Config;

/**
 * Class ActivityFactory
 * @package Filmoteca\Factories
 */
class ActivityFactory
{
    const CATEGORY = 'CINE';

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @param Collection $schedules
     * @return \Filmoteca\Models\Activity
     */
    public function single(Collection $schedules)
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
            ->setExtraSchedules(Formatter::toExtraTime($schedules))
            ->setPrices(Formatter::toPrices($schedules))
            ->setDiscounts(Formatter::toDiscounts($schedules))
            ->setCommentaries($firstSchedule->exhibition->notes)
            ->setCategory(self::CATEGORY)
            ->setImage($film->image)
            ->setReview($firstSchedule->exhibition->exhibition_film->film->synopsis);

        return $activity;
    }

    /**
     * @param Collection $collection
     * @return \Illuminate\Support\Collection
     */
    public function collection(Collection $collection)
    {
        $activities = $collection->map(function ($item) {
            return self::single(Collection::make($item));
        });

        return $activities;
    }

    public function getContact(Schedule $schedule)
    {
        $contact = sprintf('Teléfono de la sala: %s.', $schedule->auditorium->telephone);
        $contact.= sprintf('\nTeléfono de la filmoteca: %s', $this->config->get('institute.telephone'));

        return $contact;
    }
}