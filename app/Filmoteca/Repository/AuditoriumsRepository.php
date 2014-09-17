<?php namespace Filmoteca\Repository;

use Filmoteca\Models\Exhibitions\Auditorium;

class AuditoriumsRepository extends ResourcesRepository
{
	public function __construct(Auditorium $auditorium)
	{
		$this->resource = $auditorium;
	}

	public function find($id)
	{
		/**
		 * Hay que usar with antes de where para traer la relación.
		 */
		$resource = $this->resource
			->with('venue')
			->where('id', $id)
			->first();

		if( empty($resource) )
			throw new Exception("No encontrado.");
			
		return $resource;
	}
}

