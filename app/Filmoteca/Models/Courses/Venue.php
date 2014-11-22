<?php namespace Filmoteca\Models\Courses;

use Eloquent;

class Venue extends Eloquent
{
	protected $guarded = [];

	public function courseSchedule(){

		return $this->hasMany('\Filmoteca\Models\Courses\CourseSchedule');
	}
}