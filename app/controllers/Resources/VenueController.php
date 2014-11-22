<?php namespace Resources;

use Filmoteca\Repository\Courses\VenuesRepository;

class VenueController extends ResourceController
{
	protected $viewBaseName = 'venues';

	protected $resourceName = 'venue';

	public function __construct(VenuesRepository $repository)
	{
		$this->repository = $repository;
	}
}