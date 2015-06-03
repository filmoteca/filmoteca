<?php namespace Filmoteca\Repository;

use Filmoteca\Models\Film;

class FilmsRepository extends ResourcesRepository
{
	public function __construct(Film $film)
	{
		$this->resource = $film;
	}

	public function store(array $data = null)
	{
		if( empty( $data ) ) throw new Exception('Empty data');

        if (isset($data['countries'])){
            $countries_ids = $data['countries'];
            unset($data['countries']);
        }

		$film = $this->resource->create($data);

        if (isset($countries_ids)) {
            $film->countries()->sync($countries_ids);
        }

		return $film;
	}

	public function update($id,array $data = null)
	{
		if( empty( $data ) ) throw new Exception('Empty data');

		$countries_ids = $data['countries'];

		unset($data['countries']);
		
		$film = $this->resource->findOrFail($id);
		$film->fill($data)->save();
		$film->countries()->sync($countries_ids);

		return ;
	}

	/**
	 * Realiza una búsqueda de una película.
	 * @param  String $by      
	 * @param  String | Array 	$data   Valor que se desea buscar.
	 * @param  Array $options (Opcional)
	 * @return Collection | Eloquent
     * @throws Exception
	 */
	public function search($by, $data, $options = [])
	{
        $limit = 8;

		switch($by)
		{
			case( 'title' ):

				return $this->resource->where($by, 'like', '%' . $data . '%')->take($limit)->get();

			default:
				throw new Exception("The type of search there is not.");
		}
	}
}

