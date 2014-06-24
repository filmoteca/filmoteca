<?php namespace Filmoteca\Models\Exhibitions;

use Eloquent;

class Schedule extends Eloquent
{
	public function exhibitions()
	{
		return $this->belongsTo('Filmoteca\Models\Exhibitions\Exhibition');
	}

	public function auditorium()
	{
		return $this->belongsTo('Filmoteca\Models\Exhibitions\Auditorium');
	}
}