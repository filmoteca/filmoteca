<?php namespace Resources;

use Filmoteca\Repository\Courses\SubjectsRepository;

class SubjectController extends ResourceController
{
	protected $viewBaseName = 'subjects';

	protected $resourceName = 'subject';

	public function __construct(SubjectsRepository $repository)
	{
		$this->repository = $repository;
	}
}