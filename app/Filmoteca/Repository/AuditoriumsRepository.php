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
			throw new \Exception("Sala no encontrada");
			
		return $resource;
	}

	public function all()
	{
        return $this->resource->all();
	}

    public function allVenues(){

        $venues = $this->resource
            ->where('venue_id', 0)
            ->get()
            ->map(function($venue){
                $venue->auditoriums = $this->auditoriums($venue->id);
                return $venue;
            });

        return $venues;
    }

    protected function auditoriums($venueId){

        $auditoriums = $this->all();

        return $auditoriums->filter(function($auditorium) use ($venueId){
            return $venueId == $auditorium->venue_id;
        });
    }
}

