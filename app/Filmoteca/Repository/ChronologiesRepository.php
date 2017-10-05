<?php namespace Filmoteca\Repository;

use Filmoteca\Models\Chronology;
use Illuminate\Support\Collection;

class ChronologiesRepository extends ResourcesRepository
{
    public function __construct(Chronology $resource)
    {
        $this->resource = $resource;
    }

    /**
     * @param $tag
     * @return Collection
     */
    public function findByTag($description)
    {
        return $this->resource->where('description', 'like', '%' . $description . '%')->get();
    }
}
