<?php

namespace Filmoteca\Models\Exhibitions;

use Carbon\Carbon;
use DateTime;
use Eloquent;
use Filmoteca\Exhibition\Type as ExhibitionType;

/**
 * Class Schedule
 * @package Filmoteca\Models\Exhibitions
 */
class Schedule extends Eloquent implements ExhibitionType\Schedule
{
    protected $fillable = ['entry', 'auditorium_id', 'exhibition_id'];

    /**
     * @return mixed
     */
    public function exhibition()
    {
        return $this->belongsTo('Filmoteca\Models\Exhibitions\Exhibition');
    }

    /**
     * @return mixed
     */
    public function auditorium()
    {
        return $this->belongsTo('Filmoteca\Models\Exhibitions\Auditorium');
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        // TODO: Implement setId() method.
    }

    /**
     * @return int
     */
    public function getId()
    {
        // TODO: Implement getId() method.
    }

    /**
     * @param DateTime $entry
     */
    public function setEntry(DateTime $entry)
    {
        $this->entry = Carbon::instance($entry);
    }

    /**
     * @return DateTime
     */
    public function getEntry()
    {
        return Carbon::createFromFormat(MYSQL_DATE_TIME_FORMAT, $this->entry);
    }

    /**
     * @param ExhibitionType\Auditorium $auditorium
     */
    public function setAuditorium(ExhibitionType\Auditorium $auditorium)
    {
        $this->auditorium = $auditorium;
    }

    /**
     * @return ExhibitionType\Auditorium
     */
    public function getAuditorium()
    {
        return $this->auditorium;
    }

    /**
     * @param ExhibitionType\Exhibition $exhibition
     */
    public function setExhibition(ExhibitionType\Exhibition $exhibition)
    {
        // TODO: Implement setExhibition() method.
    }

    /**
     * @return ExhibitionType\Exhibition
     */
    public function getExhibition()
    {
        // TODO: Implement getExhibition() method.
    }
}
