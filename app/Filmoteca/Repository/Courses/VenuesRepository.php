<?php namespace Filmoteca\Repository\Courses;

use Filmoteca\Models\Courses\Venue;
use Filmoteca\Repository\ResourcesRepository;


class VenuesRepository extends ResourcesRepository
{

	public function __construct(Venue $model){

		$this->resource = $model;
	}
}