<?php namespace Resources;

use Filmoteca\Repository\Courses\StudentsRepository;

class StudentController extends ResourceController
{
	protected $viewBaseName = 'students';

	protected $resourceName = 'student';

	public function __construct(StudentsRepository $repository)
	{
		$this->repository = $repository;
	}
}