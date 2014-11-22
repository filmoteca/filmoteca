<?php namespace Filmoteca\Models\Courses;

use Eloquent;

class Professor extends Eloquent
{
	protected $guarded = [];

	public function courseSchedule(){

		return $this->hasMany('\Filmoteca\Models\Courses\CourseSchedule');
	}
}