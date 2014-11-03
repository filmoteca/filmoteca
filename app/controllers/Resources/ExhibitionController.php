<?php namespace Resources;

use Filmoteca\Repository\ExhibitionsRepository;

use View;

class ExhibitionController extends ResourceController
{
	protected $viewBaseName = 'exhibitions';

	protected $resourceName = 'exhibition';

	public function __construct(ExhibitionsRepository $repository)
	{
		$this->repository = $repository;
	}

	public function create(){
		return View::make('exhibitions.create');
	}
}