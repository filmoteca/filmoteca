<?php namespace Resources;

use Filmoteca\Repository\InterviewsRepository;

class InterviewController extends ResourceController
{
	protected $viewBaseName = 'interviews';

	protected $resourceName = 'interview';

	public function __construct(InterviewsRepository $repository)
	{
		$this->repository = $repository;
	}
}