<?php namespace Filmoteca\Models\Courses;

use Eloquent;

class Student extends Eloquent
{
	protected $guarded = [];

	public function courses(){

		return $this->belognsToMany('\Filmoteca\Models\Courses\CourseSchedule');
	}
}