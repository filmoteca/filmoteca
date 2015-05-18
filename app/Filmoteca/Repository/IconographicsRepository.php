<?php namespace Filmoteca\Repository;

use Filmoteca\Models\Exhibitions\Type as Iconographic;

class IconographicsRepository extends ResourcesRepository
{
	public function __construct(Iconographic $resource)
	{
		$this->resource = $resource;
	}

	public function all()
	{
		return $this->resource->all();
	}

    public function destroy($id)
    {
        $resource = $this->resource->findOrFail($id);

        $resource->delete();

        return $resource;
    }

    public function update($id, array $data = null)
    {
        $resource = $this->resource->findOrFail($id);

        $resource->fill($data)->save();

        return $resource;
    }
}

