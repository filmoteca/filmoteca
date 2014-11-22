<?php namespace Filmoteca\Models\Courses;

use Eloquent;

class CourseSchedule extends Eloquent
{
	protected $guarded = [];

	public function course(){

		return $this->belongsTo('\Filmoteca\Models\Courses\Course');
	}

	public function professor(){

		return $this->belongsTo('\Filmoteca\Models\Courses\Professor');
	}

	public function venue(){

		return $this->belongsTo('\Filmoteca\Models\Courses\Venue');
	}

	public function students(){

		return $this->belongsToMany('\Filmoteca\Models\Courses\Student');
	}
}