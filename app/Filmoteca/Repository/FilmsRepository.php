<?php namespace Filmoteca\Repository;

use Filmoteca\Models\Film;

class FilmsRepository extends ResourcesRepository
{
	public function __construct(Film $film)
	{
		$this->resource = $film;
	}
}

