<?php namespace Resources;

use Filmoteca\Repository\ExhibitionsRepository;

class ExhibitionController extends ResourceController
{
	protected $viewBaseName = 'exhibitions';

	protected $resourceName = 'exhibition';

	public function __construct(ExhibitionsRepository $repository)
	{
		$this->repository = $repository;
	}
}