<?php namespace Filmoteca\Models\Exhibitions;

use Eloquent;

class Schedule extends Eloquent
{
	protected $fillable = ['entry', 'auditorium_id','exhibition_id'];
	
	public function exhibition()
	{
		return $this->belongsTo('Filmoteca\Models\Exhibitions\Exhibition');
	}

	public function auditorium()
	{
		return $this->belongsTo('Filmoteca\Models\Exhibitions\Auditorium');
	}
}