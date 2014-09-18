<?php namespace Filmoteca\Models;

use Codesleeve\Stapler\ORM\StaplerableInterface;

use Codesleeve\Stapler\ORM\EloquentTrait;

use Eloquent;

class News extends Eloquent implements StaplerableInterface
{
	use EloquentTrait;

	protected $guarded = [];

	public function __construct(array $attributes = array())
	{
		$this->hasAttachedFile('image',[
			'styles' => [
				'thumbnail' => '80X90']]);

		parent::__construct($attributes);
	}
}