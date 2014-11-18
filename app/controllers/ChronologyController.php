<?php 

class ChronologyController extends BaseController{

	protected $repositoryName = 'Filmoteca\Repository\ChronologiesRepository';

	public function index(){
		//No lo quiero poner chornologies a la variable.
		$winners = $this->repository->all();

		return View::make('chronologies.app', compact('winners'));
	}
}