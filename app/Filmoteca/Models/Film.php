<?php namespace Filmoteca\Models;

use Eloquent;

class Film extends Eloquent
{
	public function exhibtionFilm()
	{
		return $this->hasOne('Models\Exhibitions\ExhibitionFilm');
	}
}