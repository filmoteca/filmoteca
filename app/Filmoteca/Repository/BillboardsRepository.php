<?php namespace Filmoteca\Repository;

use Filmoteca\Models\Billboard;

class BillboardsRepository extends ResourcesRepository
{
	public function __construct(Billboard $resource)
	{
		$this->resource = $resource;
	}
}