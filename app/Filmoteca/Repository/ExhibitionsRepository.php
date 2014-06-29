<?php namespace Filmoteca\Repository;

use Filmoteca\Models\Exhibitions\Exhibition;

use Filmoteca\Models\Exhibitions\ExhibitionFilm;

use Filmoteca\Models\Film;

class ExhibitionsRepository
{
	public function __construct(
		Exhibition $exhibition,
		ExhibitionFilm $exhibitionFilm,
		Film $film)
	{
		$this->exhibition = $exhibition;
		$this->exhibitionFilm = $exhibitionFilm;
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
}