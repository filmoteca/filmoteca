<?php 

namespace Filmoteca\Models;

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;
use Carbon\Carbon;
use Eloquent;

class Film extends Eloquent implements StaplerableInterface
{
	use EloquentTrait;

	protected $guarded = [];

	protected $appends = ['cover_urls', 'country'];

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
		return $this->hasOne('Filmoteca\Models\Exhibitions\ExhibitionFilm');
	}

    public function genre()
    {
        return $this->belongsTo('Filmoteca\Models\Genre');
    }

	public function getYearAttribute($value)
	{
		return Carbon::createFromFormat('Y-m-d', $value)->format('Y');
	}

	public function setYearAttribute($value)
	{
		$this->attributes['year'] = Carbon::createFromFormat('Y', $value)->format('Y-m-d');
	}

	public function getCoverUrlsAttribute()
	{
		return [
			'thumbnail' => $this->image->url('thumbnail'),
			'medium'	=> $this->image->url('medium')
		];
	}

	public function getCountryAttribute()
	{
		return \DB::table('countries')->find($this->country_id)->name;
	}
}
