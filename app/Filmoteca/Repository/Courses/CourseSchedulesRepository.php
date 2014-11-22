<?php namespace Filmoteca\Repository\Courses;

use Filmoteca\Models\Courses\CourseSchedule;
use Filmoteca\Repository\ResourcesRepository;

class CourseSchedulesRepository extends ResourcesRepository
{
	public function __construct(CourseSchedule $model){

		$this->resource = $model;
	}
}