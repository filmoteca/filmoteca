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

	protected $appends = ['cover_urls'];

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

    public function countries(){

    	return $this->belongsToMany('Filmoteca\Models\Country');
    }

	public function getCoverUrlsAttribute()
	{
		return [
			'thumbnail' => $this->image->url('thumbnail'),
			'medium'	=> $this->image->url('medium')
		];
	}

    public function getYearsAttribute($value)
    {
        return explode(',', $value);
    }

    public function setYearsAttribute($value)
    {
        if(is_string($value))
        {
            $this->attributes['years'] = $value;

            return;
        }

        if(is_numeric($value))
        {
            $this->attributes['years'] = '' . $value;

            return;
        }

        $this->attributes['years'] = implode(',', $value);
    }

    /**
     * Convert to minutes.
     * @param  String $value [description]
     * @return String        [description]
     */
    public function getDurationAttribute($value)
    {
        $parts = explode(':', $value);

        $minutes = ($parts[0] * Carbon::MINUTES_PER_HOUR) + $parts[1];

        return $minutes;
    }

    /**
     * Adds the two zeros (seconds).
     * @param String $value Format HH:MM
     */
    public function setDurationAttribute($value)
    {
        $this->attributes['duration'] = $value . ':00';
    }

    public function toArray(){

        $relations = [
            'genre'     => $this->genre,
            'countries' => $this->countries
        ];

        return array_merge( parent::toArray(), $relations);
    }
}
