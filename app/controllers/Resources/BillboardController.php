<?php namespace Resources;

use Filmoteca\Repository\BillboardsRepository;

class BillboardController extends ResourceController
{
	protected $viewBaseName = 'billboards';

	protected $resourceName = 'billboard';

	public function __construct(BillboardsRepository $repository)
	{
		$this->repository = $repository;
	}
}