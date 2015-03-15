<?php namespace Filmoteca\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Collection;

class Genre extends Eloquent
{
	protected $fillable = ['name'];

	public function findByName($name)
	{
		if( !is_string($name) )
    	{
    		return Collection::make([]);
    	}

		return $this->where('name', $name)->get();
	}
}