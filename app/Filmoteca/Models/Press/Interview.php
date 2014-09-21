<?php namespace Filmoteca\Models\Press;

use Codesleeve\Stapler\ORM\StaplerableInterface;

use Codesleeve\Stapler\ORM\EloquentTrait;

use Carbon\Carbon;

use Eloquent;

class Interview extends Eloquent implements StaplerableInterface
{
	use EloquentTrait;

	protected $guarded = [];

	public function __construct(array $attributes = array())
	{
		$this->hasAttachedFile('image',[
			'styles' => [
				'thumbnail' => '150x150',
				'medium' => '300x300']]);

		$this->hasAttachedFile('video');

		$this->hasAttachedFile('audio');

		parent::__construct($attributes);
	}
}