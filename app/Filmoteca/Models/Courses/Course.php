<?php namespace Filmoteca\Models\Courses;

use Eloquent;

class Course extends Eloquent
{
	protected $guarded = [];

	public function courseSchedule(){

		return $this->hasMany('\Filmoteca\Models\Courses\CourseSchedule');
	}
}