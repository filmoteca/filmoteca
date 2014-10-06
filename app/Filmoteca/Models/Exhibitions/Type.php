<?php namespace Filmoteca\Models\Exhibitions;

use Codesleeve\Stapler\ORM\StaplerableInterface;

use Codesleeve\Stapler\ORM\EloquentTrait;

use Eloquent;

class Type extends Eloquent implements StaplerableInterface
{
	use EloquentTrait;

	protected $table = 'exhibition_types';

	protected $guarded = [];

	public function __construct(array $attributes = array())
	{
		$this->hasAttachedFile('image',[
			'styles' => ['thumbnail' => '64x64']]);

		parent::__construct($attributes);
	}
	
	public function exhibition()
	{
		return $this->hasMany('Filmoteca\Models\Exhibitions\Exhibition');
	}
}