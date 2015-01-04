<?php

use Filmoteca\Repository\ExhibitionsRepository;

use Filmoteca\Models\Exhibitions\Auditorium;

use Filmoteca\ExhibitionsManager;

use Filmoteca\Models\Film;

use Filmoteca\Models\Exhibitions\Exhibition;

use Carbon\Carbon;

class ExhibitionController extends BaseController
{
	public function __construct(
		ExhibitionsRepository $exhibitionRepository,
		ExhibitionsManager $exhibitionsManager)
	{
		$this->repository = $exhibitionRepository;

		$this->manager = $exhibitionsManager;
	}

	public function index()
	{
		$today = Carbon::now();

		$interval = array(
				Carbon::createFromDate(
					$today->year,
					$today->month,
					1)->toDateString(),
				Carbon::createFromDate(
					$today->year,
					$today->month,
					$today->daysInMonth)->toDateString()
			);

		$exhibitions = $this->repository
			->search('date',$interval);
		
		$auditoriums = Auditorium::all(array('id','name'));

		$icons = $this->manager->getIcons($exhibitions);

		$weeks = array();

		return View::make(
			'exhibitions.app', 
			compact(
				'exhibitions',
				'auditoriums',
				'icons',
				'weeks'));
	}

	public function search($by)
	{
		$exhbitions = $this->repository
			->search($by, Input::get('value'));

		return View::make('exhibitions.search-result', $exhibitions);
	}

	/**
	 * Esta acción crea una vista con los detalles de una exhibición,
	 * estableciendo un layout para peticiones ajax y otro para peticiones
	 * no-ajax.
	 * @param  Integer $id Id de un entero
	 * @return view Una vista que depende de la solicitud (ajax o )
	 */
	public function detail($id)
	{
		$exhibition = $this->repository->search('id',$id);

		//Extend Request;
		$isJson = stristr(Request::header('Accept'), 'application/json' );

		$layout = ( Request::ajax() || $isJson )? 'layouts.modal': 'layouts.default';

		return View::make('exhibitions.details', compact('exhibition','layout') );
	}

	public function detailHistory($id){

		$exhibition = $this->repository->search('id',$id);

		return View::make('exhibitions.detail-history', compact('exhibition') );	
	}

	public function detailHome($id){

		$exhibition = $this->repository->search('id',$id);

		return View::make('exhibitions.partial-details', compact('exhibition') );	
	}

	public function history(){

		return View::make('exhibitions.history');
	}

	public function find(){

		$q = Film::getQuery();

		if( Input::has('title') && !empty( Input::get('title')) ){

			$q->where('title', 'like' ,'%' . Input::get('title') . '%');

			$next_where_type = 'or';
		}

		if( Input::has('director') && !empty( Input::get('director'))){

			$q->where('director', 'like', '%' . Input::get('director') . '%', $next_where_type);
		}

		$films_ids = array_map(function($dummyObject){
			return $dummyObject->id; //The query builder returns an array and does not a collection. I do not know why.
		}, $q->get(['id']) ) ;

		$view = View::make('exhibitions.history');

		if( !empty($films_ids) ){

			$resources = Exhibition::whereHas('exhibitionFilm', function($q) use ($films_ids){

				$q->whereIn('id', $films_ids);
			})->paginate(15);

			return $view->with('resources', $resources);
		}else{

			return $view->with('noResults', 0);
		}
		
	}
}