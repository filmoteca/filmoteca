<?php namespace Filmoteca\Repository\Courses;

use Filmoteca\Models\Courses\Subject;
use Filmoteca\Repository\ResourcesRepository;

class SubjectsRepository extends ResourcesRepository
{
	public function __construct(Subject $model){

		$this->resource = $model;
	}
}