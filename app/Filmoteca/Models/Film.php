<?php namespace Filmoteca\Models;

use Eloquent;

class Film extends Eloquent
{
	protected $guarded = array();
	
	public function exhibtionFilm()
	{
		return $this->hasOne('Models\Exhibitions\ExhibitionFilm');
	}
}