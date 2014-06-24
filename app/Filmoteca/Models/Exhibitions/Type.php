<?php namespace Filmoteca\Models\Exhibitions;

use Eloquent;

class Type extends Eloquent
{
	protected $table = 'exhibition_types';
	
	public function exhibition()
	{
		return $this->hasOne('Filmoteca\Models\Exhibitions\Exhibition');
	}
}