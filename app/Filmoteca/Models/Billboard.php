<?php namespace Filmoteca\Models;

use Codesleeve\Stapler\ORM\StaplerableInterface;

use Codesleeve\Stapler\ORM\EloquentTrait;

use Eloquent;

class Billboard extends Eloquent implements StaplerableInterface
{
	use EloquentTrait;

	protected $guarded = [];

	public function __construct(array $attributes = array())
	{
		$this->hasAttachedFile('pdf');

		$this->hasAttachedFile('image',[
			'styles' => [
				'medium' => '300x300',
				'thumbnail' => '150x150']]);

		parent::__construct($attributes);
	}
}