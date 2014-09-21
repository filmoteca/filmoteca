<?php namespace Filmoteca\Repository;

use Filmoteca\Models\FilmotecaMedal;

class FilmotecaMedalsRepository extends ResourcesRepository
{
	public function __construct(FilmotecaMedal $resource)
	{
		$this->resource = $resource;
	}
}

