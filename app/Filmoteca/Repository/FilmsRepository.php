<?php namespace Filmoteca\Repository;

use Filmoteca\Models\Film;

class FilmsRepository
{
	public function __construct(Film $film)
	{
		$this->film = $film;
	}

	public function store(array $data = null)
	{
		if( empty( $data ) ) throw new Excpetion('Empty data');

		return $this->film->create($data);
	}

	public function find($id)
	{
		return $this->film->findOrFail($id);
	}

	public function paginate($amount)
	{
		return $this->film->paginate($amount);
	}

	public function update($id,array $data = null)
	{
		if( empty( $data ) ) throw new Excpetion('Empty data');

		return $this->film->findOrFail($id)->fill($data)->save();
	}

	public function destroy($id)
	{
		$this->film->destroy($id);

		return is_null( $this->film->find($id) );
	}
}

