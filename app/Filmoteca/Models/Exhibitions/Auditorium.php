<?php namespace Filmoteca\Models\Exhibitions;

use Eloquent;

class Auditorium extends Eloquent
{	
	protected $table = 'auditoriums';

	public function schedules()
	{
		return $this->hasMany('Schedule');
	}
}