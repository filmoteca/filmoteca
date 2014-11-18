<?php namespace Filmoteca\Models;

use Eloquent;

use Carbon\Carbon;

class Chronology extends Eloquent
{
	protected $guarded = [];

	public function getYearAttribute($value)
	{
		return Carbon::createFromFormat('Y-m-d', $value)->format('Y');
	}

	public function setYearAttribute($value)
	{
		$this->attributes['year'] = Carbon::createFromFormat('Y', $value)->format('Y-m-d');
	}
}