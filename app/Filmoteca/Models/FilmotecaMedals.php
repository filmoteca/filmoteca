<?php namespace Filmoteca\Models;

use Codesleeve\Stapler\ORM\StaplerableInterface;

use Codesleeve\Stapler\ORM\EloquentTrait;

use Eloquent;

class FilmotecaMedal extends Eloquent implements StaplerableInterface
{
	use EloquentTrait;

	protected $guarded = [];

	public function __construct(array $attributes = array())
	{
		$this->hasAttachedFile('image',[
			'styles' => [
				'thumbnail' => '340X250']]);

		parent::__construct($attributes);
	}

	public function toArray(){

		return array_merge( parent::toArray(), ['photo' => $this->image->url('thumbnail')]);
	}
}