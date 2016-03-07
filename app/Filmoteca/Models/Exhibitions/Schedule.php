<?php

namespace Filmoteca\Models\Exhibitions;

use Carbon\Carbon;
use DateTime;
use Eloquent;
use Filmoteca\Exhibition\Type\Auditorium;
use Filmoteca\Exhibition\Type\Exhibition;

/**
 * Class Schedule
 * @package Filmoteca\Models\Exhibitions
 */
class Schedule extends Eloquent implements \Filmoteca\Exhibition\Type\Schedule
{
    const DATE_FORMAT = 'Y-m-d H:i:s';

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
        return Carbon::createFromFormat(self::DATE_FORMAT, $this->entry);
    }

    /**
     * @param Auditorium $auditorium
     */
    public function setAuditorium(Auditorium $auditorium)
    {
        $this->auditorium = $auditorium;
    }

    /**
     * @return Auditorium
     */
    public function getAuditorium()
    {
        return $this->auditorium;
    }

    /**
     * @param Exhibition $exhibition
     */
    public function setExhibition(Exhibition $exhibition)
    {
        // TODO: Implement setExhibition() method.
    }

    /**
     * @return Exhibition
     */
    public function getExhibition()
    {
        // TODO: Implement getExhibition() method.
    }
}
