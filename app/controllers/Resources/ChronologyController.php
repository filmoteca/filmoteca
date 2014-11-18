<?php namespace Resources;

use Filmoteca\Repository\ChronologiesRepository;

class ChronologyController extends ResourceController
{
	protected $viewBaseName = 'chronologies';

	protected $resourceName = 'chronology';

	public function __construct(ChronologiesRepository $repository)
	{
		$this->repository = $repository;
	}
}