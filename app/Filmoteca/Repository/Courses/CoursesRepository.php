<?php namespace Filmoteca\Repository\Courses;

use Filmoteca\Models\Courses\Course;
use Filmoteca\Repository\ResourcesRepository;

class CoursesRepository extends ResourcesRepository
{
	public function __construct(Course $model){

		$this->resource = $model;
	}
}