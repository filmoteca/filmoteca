<?php namespace Filmoteca\Repository;

use Filmoteca\Models\Billboard;

class BillboardsRepository extends ResourcesRepository
{
	public function __construct(Billboard $resource)
	{
		$this->resource = $resource;
	}

    public function thisYear()
    {
        return $this->byYear(date('Y'));
    }

    public function previousYear()
    {
        return $this->byYear(date('Y') -1);
    }

    public function byYear($year)
    {
        return $this->resource
            ->whereRaw('YEAR(created_at) = ?', [$year])
            ->orderBy('created_at','desc')
            ->get();
    }
}