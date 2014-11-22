<?php namespace Resources;

use Filmoteca\Repository\Courses\CoursesRepository;

class CourseController extends ResourceController
{
	protected $viewBaseName = 'courses';

	protected $resourceName = 'course';

	public function __construct(CoursesRepository $repository)
	{
		$this->repository = $repository;
	}
}