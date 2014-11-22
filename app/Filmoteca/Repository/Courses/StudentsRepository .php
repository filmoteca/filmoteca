<?php namespace Filmoteca\Repository\Courses;

use Filmoteca\Models\Courses\Student;
use Filmoteca\Repository\ResourcesRepository;


class StudentsRepository extends ResourcesRepository
{

	public function __construct(Student $model){

		$this->resource = $model;
	}
}