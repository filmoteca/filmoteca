<?php namespace Filmoteca\Models\Exhibitions;

use Codesleeve\Stapler\ORM\StaplerableInterface;

use Codesleeve\Stapler\ORM\EloquentTrait;

use Eloquent;

class Type extends Eloquent implements StaplerableInterface
{
	use EloquentTrait;

	protected $table = 'exhibition_types';

	protected $guarded = [];

	protected $fillable = ['name', 'image_file_name', 'image_file_size', 'image_content_type', 'image_updated_at'];

	protected $appends = ['icon'];

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

	public function getIconAttribute()
	{
		return $this->image->url('thumbnail');
	}
}
