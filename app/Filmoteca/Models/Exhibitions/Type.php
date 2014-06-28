<?php namespace Filmoteca\Models\Exhibitions;

use Eloquent;

class Type extends Eloquent
{
	protected $table = 'exhibition_types';
	
	public function exhibition()
	{
		return $this->hasMany('Filmoteca\Models\Exhibitions\Exhibition');
	}
}