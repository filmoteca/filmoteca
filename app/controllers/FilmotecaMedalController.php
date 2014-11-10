<?php 

class FilmotecaMedalController extends BaseController{

	protected $repositoryName = 'Filmoteca\Repository\FilmotecaMedalsRepository';

	public function index(){

		$winners = $this->repository->all();

		return View::make('filmoteca_medals.app', compact('winners'));
	}
}