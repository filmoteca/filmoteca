<?php

namespace Filmoteca\Models;

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Carbon\Carbon;

class Chronology extends Eloquent implements StaplerableInterface
{
    use EloquentTrait;

    protected $guarded = [];

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
    }

    public function getYearAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d', $value)->format('Y');
    }

    public function setYearAttribute($value)
	{
		$this->attributes['year'] = Carbon::createFromFormat('Y', $value)->format('Y-m-d');
	}
}
