<?php namespace Filmoteca\Models;

use Codesleeve\Stapler\ORM\StaplerableInterface;

use Codesleeve\Stapler\ORM\EloquentTrait;

use Carbon\Carbon;

use Eloquent;

class Film extends Eloquent implements StaplerableInterface
{
	use EloquentTrait;

	protected $guarded = [];

	public function __construct(array $attributes = array())
	{
		$this->hasAttachedFile('image',[
			'styles' => [
				'medium' => '300x300',
				'thumbnail' => '150x150']]);

		parent::__construct($attributes);
	}
	
	public function exhibtionFilm()
	{
		return $this->hasOne('Models\Exhibitions\ExhibitionFilm');
	}

	public function getYearAttribute($value)
	{
		return Carbon::createFromFormat('Y-m-d', $value)->format('Y');
	}

	public function setYearAttribute($value)
	{
		$this->attributes['year'] = Carbon::createFromFormat('Y', $value)->format('Y-m-d');
	}
}