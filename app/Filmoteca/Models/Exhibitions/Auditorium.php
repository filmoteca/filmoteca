<?php namespace Filmoteca\Models\Exhibitions;

use Codesleeve\Stapler\ORM\StaplerableInterface;

use Codesleeve\Stapler\ORM\EloquentTrait;

use Eloquent;

class Auditorium extends Eloquent implements StaplerableInterface
{
	use EloquentTrait;

	protected $table = 'auditoriums';

	protected $guarded = array();

	public function __construct(array $attributes = array())
	{
		$this->hasAttachedFile('image',[
			'styles' => [
				'medium' => '200x355',
				'thumbnail' => '150x255']]);

		parent::__construct($attributes);
	}

	public function schedules()
	{
		return $this->hasMany('Schedule');
	}

	public function venue()
	{
		return $this->hasOne(
			'Filmoteca\Models\Exhibitions\Auditorium', 
			'id', 'venue_id');
	}
}