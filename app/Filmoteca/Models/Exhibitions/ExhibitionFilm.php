<?php namespace Filmoteca\Models\Exhibitions;

use Eloquent;

use Filmoteca\Models\Film;

class ExhibitionFilm extends Eloquent
{
	public function film()
	{
		return $this->belongsTo('Filmoteca\Models\Film');
	}
}