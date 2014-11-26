<?php namespace Filmoteca\Repository;

use App;

use Filmoteca\Models\Exhibitions\Exhibition;

use Filmoteca\Models\Exhibitions\ExhibitionFilm;

use Filmoteca\Models\Film;

class ExhibitionsRepository extends ResourcesRepository
{
	public function __construct(
		Exhibition $exhibition,
		ExhibitionFilm $exhibitionFilm,
		Film $film)
	{
		$this->exhibition = $exhibition;
		$this->exhibitionFilm = $exhibitionFilm;
		$this->repository = $exhibition; // ## REFACTOR
		$this->resource = $exhibition; //##REFACTOR
		$this->film = $film;
	}

	/**
	 * Realiza una búsqueda de exhibiciones dependiendo
	 * del primer parámetro.
	 * @param  String $by    Esta cadena indica el tipo de búsqueda que se realizara.
	 * @param  Mixed $value El valor con el cual se  quiere que coincida la búsqueda
	 * y depende el tipo de búsqueda.
	 * @return Collection 	Collección de exhibiciones
	 * @throws NotFoundException Si la exhibición no existe al realizar una búsquda por id.
	 */
	public function search($by, $value)
	{
		switch($by)
		{
			case('id'):

				$exhibitions = $this->exhibition->findOrFail($value);
				
				break;
			case('title'):

				$exhibitions = $this->searchByTitle( $value );

				break;
			case('date'):

				$exhibitions = $this->searchByDate($value[0], $value[1]);
				break;
			default:
				throw new Exception('Parámetro de búsqueda invalido: ' . $by );
		}

		return $exhibitions;
	}

	/**
	 * Realiza una búsquda de aquellas exhibiciones que
	 * exhiban una película con el título dado.
	 * @param  [type] $title [description]
	 * @return [type]        [description]
	 */
	public function searchByTitle($title)
	{
		$films = $this->film
					->where('title','like', '%'. $value . '%')
					->get(array('id'));

		/**
		 * El id de ExhibitionFilm es igual (o tendría que serlo) al
		 * de Films ya que la relación es uno a uno.
		 */

		$exhibitions = $this->exhibition
					->whereIn('id', $films->lists('id'), 'or')
					->with('exhibitionFilm','exhibitionFilm.film')
					->get();

		/**
		 * Cargamos la programación de las exhibiciones encontradas.
		 * La sentencia dentro del foreach lo que hace es inicializar
		 * el atributo schedules de una exhibición.
		 */
		foreach($exhibitions as $exhibition )
		{
			$exhibition->schedules;
		}

		return $exhibitions;
	}

	/**
	 * Busca todas las exhibiciones que esten entre dos fechas
	 * incluyendo aquellas de la fecha incial y final.
	 * @param  String $from  Fecha de inicio.
	 * @param  String $until Fecha de fin. 
	 * @return Collection        Colección de exhibiciones.
	 */
	public function searchByDate( $from, $until)
	{
		$interval = array($from , $until . ' 23:59:59');

		$exhibitions = $this->exhibition
			->whereHas('schedules', function($query) use ($interval)
			{
				$query->whereBetween('entry', $interval);
			})
			->with(
				'schedules', 
				'schedules.auditorium',
				'exhibitionFilm',
				'exhibitionFilm.film',
				'type')
			->get();

		return $exhibitions;
	}

	/**
	 * El código de esta función quedo muy mal. Yo esperabá que eloquente
	 * pudiera guardar los datos que en el array $data sin problemas.
	 * pero te tengo que acomodar cada dato para que coincida con las columnas
	 * de la base de datos.
	 *
	 * Hay que encontrar una mejor forma de hacer esto.
	 *
	 * ## ENHANCEMENT
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function store(array $data = null)
	{
		$d = [];
		$d['type_id'] = $data['type']['id'];

		$exhibitionFilm = App::make('Filmoteca\Models\Exhibitions\ExhibitionFilm');

		$exhibitionFilm->fill(['film_id' => $data['exhibition_film']['film']['id'] ])
			->save();


		$d['exhibition_film_id'] = $exhibitionFilm->id;

		$schedules = [];

		foreach( $data['schedules'] as $value)
		{
			$model = App::make('Filmoteca\Models\Exhibitions\Schedule');

			$value['auditorium_id'] = $value['auditorium']['id'];
			
			unset( $value['auditorium']);
			unset( $value['date'] );
			unset( $value['time'] );

			$model->fill($value);

			array_push( $schedules, $model );
		}

		$this->repository->create($d)->schedules()
			->saveMany($schedules);

		return true;
	}

	public function find($id)
	{
		return $this->resource->where('id', $id)
			->with(
				'schedules', 
				'schedules.auditorium',
				'exhibitionFilm',
				'exhibitionFilm.film',
				'type')
			->first();
	}
}