<?php namespace Filmoteca\Repository\Courses;

use Filmoteca\Models\Courses\Student;
use Filmoteca\Repository\ResourcesRepository;
use Cartalyst\Sentry\Users\UserNotFoundException;


class StudentsRepository extends ResourcesRepository
{

	public function __construct(Student $model){

		$this->resource = $model;
	}

	public function findByEmail($email){

		$student = $this->resource->where('email', $email)->first();

		if( empty($student) ){

			throw new UserNotFoundException('The student with email "' . $email . '" was not found.');
		}

		return $student;
	}
}