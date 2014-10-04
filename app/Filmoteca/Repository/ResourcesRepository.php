<?php namespace Filmoteca\Repository;

use Exception;

class ResourcesRepository
{
	public function store(array $data = null)
	{
		if( empty( $data ) ) throw new Exception('Empty data');

		return $this->resource->create($data);
	}

	public function find($id)
	{
		return $this->resource->findOrFail($id);
	}

	public function paginate($amount)
	{
		return $this->resource->paginate($amount);
	}

	public function update($id,array $data = null)
	{
		if( empty( $data ) ) throw new Exception('Empty data');

		return $this->resource->findOrFail($id)->fill($data)->save();
	}

	public function destroy($id)
	{
		$this->resource->destroy($id);

		return is_null( $this->resource->find($id) );
	}
}

