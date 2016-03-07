<?php

namespace Filmoteca\Exhibition\Type;

use \Illuminate\Support\Collection;

/**
 * Interface Exhibition
 * @package Filmoteca\Exhibition\Type
 */
interface Exhibition
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     */
    public function setId($id);

    /**
     * @return Film
     */
    public function getFilm();

    /**
     * @param Film $film
     */
    public function setFilm(Film $film);

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getSchedules();

    /**
     * @param \Illuminate\Support\Collection $schedules
     */
    public function setSchedules(Collection $schedules);

    /**
     * @return Type
     */
    public function getType();

    /**
     * @param Type $type
     */
    public function setType(Type $type);

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getSchedulesGroupedByAuditorium();
}
