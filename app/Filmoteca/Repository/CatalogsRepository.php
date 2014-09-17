<?php namespace Filmoteca\Repository;

use Filmoteca\Models\Catalog;

class CatalogsRepository extends ResourcesRepository
{
	public function __construct(Catalog $catalog)
	{
		$this->resource = $catalog;
	}
}

