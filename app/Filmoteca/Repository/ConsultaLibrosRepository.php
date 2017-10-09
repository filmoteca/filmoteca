<?php namespace Filmoteca\Repository;

use Filmoteca\Models\ConsultaLibro;
use Illuminate\Support\Collection;

class ConsultaLibrosRepository extends ResourcesRepository
{
    public function __construct(ConsultaLibro $resource)
    {
        $this->resource = $resource;
    }

    /**
     * @param $name
     * @return Collection
     */
    public function findByTitle($title)
    {
        return $this->resource->where('title', 'like', '%' . $title . '%')->get();
    }
}
