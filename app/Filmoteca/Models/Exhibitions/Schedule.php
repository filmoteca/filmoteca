<?php namespace Filmoteca\Models\Exhibitions;

use Eloquent;

class Schedule extends Eloquent
{
	protected $guarded = [];
	
	public function exhibitions()
	{
		return $this->belongsTo('Filmoteca\Models\Exhibitions\Exhibition');
	}

	public function auditorium()
	{
		return $this->belongsTo('Filmoteca\Models\Exhibitions\Auditorium');
	}
}