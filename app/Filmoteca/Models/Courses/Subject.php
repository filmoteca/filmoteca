<?php namespace Filmoteca\Models\Courses;

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;
use Eloquent;

class Subject extends Eloquent implements StaplerableInterface
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

	public function courses(){

		return $this->hasMany('\Filmoteca\Models\Courses\Course');
	}

	public function toArray(){

		return array_merge( parent::toArray(), ['image' => $this->image->url('thumbnail')]);
	}
}