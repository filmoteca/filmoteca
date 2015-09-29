<?php namespace Filmoteca\Repository;

use App;
use Carbon\Carbon;
use InvalidArgumentException;
use Filmoteca\Models\Exhibitions\Exhibition;
use Filmoteca\Models\Exhibitions\ExhibitionFilm;
use Filmoteca\Models\Film;
use Filmoteca\Pagination\Results;
use Illuminate\Database\Eloquent\Collection;

class ExhibitionsRepository extends ResourcesRepository implements PageableRepositoryInterface
{
	public function __construct(
		Exhibition $exhibition,
		ExhibitionFilm $exhibitionFilm,
		Film $film
	) {
		$this->exhibition       = $exhibition;
		$this->exhibitionFilm   = $exhibitionFilm;
		$this->resource         = $exhibition;
		$this->film             = $film;
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
	public function search($by, $value = null)
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
			case('today'):

				$today = Carbon::now()->toDateString();
				$exhibitions = $this->searchByDate( $today, $today . ' 23:59:59');

				break;
			default:
				throw new InvalidArgumentException('Parámetro de búsqueda invalido: ' . $by );
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
	public function searchByDate($from, $until)
	{
		$interval = array($from , $until . ' 23:59:59');

		$exhibitions = $this->exhibition
			->whereHas('schedules', function($query) use ($interval)
			{
				$query->whereBetween('entry', $interval);
			})->with(
                'schedules',
                'schedules.auditorium',
				'exhibitionFilm',
				'exhibitionFilm.film',
                'exhibitionFilm.film.genre',
                'exhibitionFilm.film.countries',
				'type'
            )->get();

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

		return $this->resource->create($d);
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

    /**
     * @param int $page
     * @param string $query
     * @param int $amount
     * @return \Filmoteca\Pagination\Results
     */
	public function paginate($page = 1, $query = '', $amount = 15)
	{
		$results = Results::make();

		$resources = $this
			->resource
            ->whereHas('exhibitionFilm', function($q) use ($query){

                $q->whereHas('film', function($q) use ($query) {
                    $q->where('films.title', 'like', '%' . $query . '%');
                });
            })
			->orderBy('id','desc')
			->skip($amount * ($page - 1))
			->take($amount)
			->with('exhibitionFilm','exhibitionFilm.film')
			->get();

        $total = $this
            ->resource
            ->whereHas('exhibitionFilm', function($q) use ($query){

                $q->whereHas('film', function($q) use ($query) {
                    $q->where('films.title', 'like', '%' . $query . '%');
                });
            })
            ->count();

		$results->setTotal($total);
		$results->setItems($resources);

		return $results;
	}

	public function update($id, array $data = null)
	{
		$exhibition = $this->resource
			->findOrFail($data['id'])
			->fill($data);

		$exhibition->save();

		return true;
	}

    public function findByTitleDirector($fields)
    {
        $builder    = Film::getQuery();
        $resources  = Collection::make([]);
        $limit      = 15;

        foreach($fields as $name => $value)
        {
            $builder->where($name, 'like' ,'%' . $value . '%');
        }

        $results = $builder->get(['id']);

        $filmsIds = array_map(function($dummyObject){
            return $dummyObject->id; //The query builder returns an array and does not a collection. I do not know why.
        }, $results );

        if( !empty($filmsIds) ){
            $resources = Exhibition::whereHas('exhibitionFilm', function($q) use ($filmsIds){

                $q->whereHas('film', function($q) use ($filmsIds) {
                    $q->whereIn('films.id', $filmsIds);
                });
            })->with('schedules',
                'schedules.auditorium',
                'exhibitionFilm',
                'exhibitionFilm.film',
                'type')
                ->paginate($limit);
        }

        return $resources;
    }

	/**
	 * The exhibitions of the current month.
	 *
	 * @return Collection
	 */
	public function findLast()
	{
		$today = Carbon::now();

		$from = Carbon::createFromDate(
			$today->year,
			$today->month,
			1
		)->toDateString();

		$until = Carbon::createFromDate(
			$today->year,
			$today->month,
			$today->daysInMonth
		)->toDateString();

		return $this->searchByDate($from, $until);
	}

	/**
	 * @param int $month
	 * @return Collection
	 */
	public function findByMonth($month = 0)
	{
		if (!is_int($month) || $month < 1 || $month > 12) {
			return $this->exhibition->findLast();
		}

		$currentDate = Carbon::now();
		$currentDate->month = $month;

		$from = Carbon::createFromDate(
			$currentDate->year,
			$currentDate->month,
			1
		)->toDateString();

		$until = Carbon::createFromDate(
			$currentDate->year,
			$currentDate->month,
			$currentDate->daysInMonth
		)->toDateString();

		return $this->searchByDate($from, $until);
	}

	protected function makeSchedules(array $schedules = null)
	{
		return array_map(function($a_schedule){

			if( isset($data['id'])) {
				$schedule = App::make('Filmoteca\Models\Exhibitions\Schedule')
					->findOrFail($a_schedule['id'])
					->fill($a_schedule)
					->save();
			} else {
				$a_schedule['auditorium_id'] = $a_schedule['auditorium']['id'];
				$schedule = App::make('Filmoteca\Models\Exhibitions\Schedule')
					->fill($a_schedule)
					->save();
			}

			return $schedule;
		}, $schedules);
	}
}
