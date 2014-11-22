<?php namespace Resources;

use Filmoteca\Repository\Courses\ProfessorsRepository;

class ProfessorController extends ResourceController
{
	protected $viewBaseName = 'professors';

	protected $resourceName = 'professor';

	public function __construct(ProfessorsRepository $repository)
	{
		$this->repository = $repository;
	}
}