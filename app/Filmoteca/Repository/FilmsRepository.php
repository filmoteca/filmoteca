<?php namespace Filmoteca\Repository;

use Filmoteca\Models\Film;
use Filmoteca\Pagination\Results;

class FilmsRepository extends ResourcesRepository implements PageableRepositoryInterface
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

    /**
     * @param int $page
     * @param string $query
     * @param int $itemsPerPage
     * @return \Filmoteca\Pagination\Results
     */
    public function paginate($page = 1, $query = '', $itemsPerPage = 15)
    {
        $results = Results::make();

        $films = $this->resource
            ->where('title', 'like', '%' . $query . '%')
            ->whereOr('original_title', 'like', '%' . $query . '%')
            ->skip(($page - 1) * $itemsPerPage)
            ->take($itemsPerPage)
            ->get();

        $totalFilms = $this->resource
            ->where('title', 'like', '%' . $query . '%')
            ->whereOr('original_title', 'like', '%' . $query . '%')
            ->count();

        $results->setItems($films);
        $results->setTotal($totalFilms);

        return $results;
    }
}
