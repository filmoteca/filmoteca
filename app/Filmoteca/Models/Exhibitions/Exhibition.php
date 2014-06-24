<?php namespace Filmoteca\Models\Exhibitions;

use Eloquent;

class Exhibition extends Eloquent
{
	public function exhibitionFilm()
	{
		return $this->belongsTo('Filmoteca\Models\Exhibitions\ExhibitionFilm');
	}

	public function type()
	{
		return $this->belongsTo('Filmoteca\Models\Exhibitions\Type');
	}

	public function schedules()
	{
		return $this->hasMany('Filmoteca\Models\Exhibitions\Schedule')->with('auditorium');
	}

	public function auditoriums()
	{
		return $this->hasManyThrough('Filmoteca\Models\Exhibitions\Auditorium', 'Schedule');
	}
}