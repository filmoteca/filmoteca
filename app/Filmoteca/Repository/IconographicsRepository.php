<?php namespace Filmoteca\Repository;

use Filmoteca\Models\Exhibitions\Type as Iconographic;

class IconographicsRepository extends ResourcesRepository
{
	public function __construct(Iconographic $resource)
	{
		$this->resource = $resource;
	}

	public function all()
	{
		return $this->resource->all();
	}
}

