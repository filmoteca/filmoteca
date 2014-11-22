<?php namespace Filmoteca\Repository\Courses;

use Filmoteca\Models\Courses\Professor;
use Filmoteca\Repository\ResourcesRepository;

class ProfessorsRepository extends ResourcesRepository
{

	public function __construct(Professor $resource){

		$this->resource = $resource;
	}

}