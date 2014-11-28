<?php namespace Filmoteca\Models\Courses;

use Eloquent;

class Subject extends Eloquent
{
	protected $guarded = [];

	public function courses(){

		return $this->hasMany('\Filmoteca\Models\Courses\Course');
	}
}