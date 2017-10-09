<?php namespace Resources;

use Filmoteca\Repository\ConsultaLibrosRepository;

class ConsultaLibroController extends ResourceController
{
	protected $viewBaseName = 'consulta_libros';

	protected $resourceName = 'consultaLibro';

	public function __construct(ConsultaLibrosRepository $repository)
	{
		$this->repository = $repository;
	}
}