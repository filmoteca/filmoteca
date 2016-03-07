<?php

namespace Filmoteca\Models\Exhibitions;

use Eloquent;

/**
 * Class Schedule
 * @package Filmoteca\Models\Exhibitions
 */
class Schedule extends Eloquent
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
}
