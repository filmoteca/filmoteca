<?php namespace Resources;

use Filmoteca\Repository\CatalogsRepository;

class CatalogController extends ResourceController
{
	protected $viewBaseName = 'catalogs';

	protected $resourceName = 'catalog';

	public function __construct(CatalogsRepository $catalogsRepository)
	{
		$this->repository = $catalogsRepository;
	}
}