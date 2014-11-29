<?php namespace Filmoteca\Models\Courses;

use Eloquent;

class Course extends Eloquent
{
	protected $guarded = [];

	public function subject(){

		return $this->belongsTo('\Filmoteca\Models\Courses\Subject');
	}

	public function professor(){

		return $this->belongsTo('\Filmoteca\Models\Courses\Professor');
	}

	public function venue(){

		return $this->belongsTo('\Filmoteca\Models\Courses\Venue');
	}

	public function students(){

		return $this->belongsToMany('\Filmoteca\Models\Courses\Student')->withPivot('paymnet_status');
	}
}