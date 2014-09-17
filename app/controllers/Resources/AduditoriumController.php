<?php namespace Resources;

use Filmoteca\Repository\AuditoriumsRepository;

class AuditoriumController extends ResourceController
{
	protected $viewBaseName = 'auditoriums';

	protected $resourceName = 'auditorium';

	public function __construct(AuditoriumsRepository $auditoriumsRepository)
	{
		$this->repository = $auditoriumsRepository;
	}
}