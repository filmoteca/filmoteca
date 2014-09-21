<?php namespace Filmoteca\Repository;

use Filmoteca\Models\Press\Interview;

class InterviewsRepository extends ResourcesRepository
{
	public function __construct(Interview $interview)
	{
		$this->resource = $interview;
	}
}

