<?php namespace Filmoteca\Repository;

use Filmoteca\Models\Chronology;

class ChronologiesRepository extends ResourcesRepository
{
	public function __construct(Chronology $model)
	{
		$this->resource = $model;
	}
}

