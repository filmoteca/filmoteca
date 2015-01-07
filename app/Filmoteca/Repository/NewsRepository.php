<?php namespace Filmoteca\Repository;

use Filmoteca\Models\News;

class NewsRepository extends ResourcesRepository
{
	public function __construct(News $_new)
	{
		$this->resource = $_new;
	}

    public function lastNews( $amount ){

        return $this->resource
            ->orderBy('created_at', 'desc')
            ->take( $amount )
            ->get();
    }
}

