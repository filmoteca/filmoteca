<?php namespace Filmoteca\Models\Courses;

use Codesleeve\Stapler\ORM\StaplerableInterface;

use Codesleeve\Stapler\ORM\EloquentTrait;

use Eloquent;

class Student extends Eloquent implements StaplerableInterface
{
	use EloquentTrait;

	// protected $fillable = ['id','name','last_name','second_last_name','telephone','mobile','unam_member', 'user_id'];
	protected $guarded = [];

	public function __construct(array $attributes = array())
	{
		$this->hasAttachedFile('photo',[
			'styles' => [
				'medium' => '200x355',
				'thumbnail' => '150x255']]);

		parent::__construct($attributes);
	}

	public function courses(){

		return $this->belongsToMany('\Filmoteca\Models\Courses\Course')->withPivot('payment_status');
	}

	public function toArray(){

		return array_merge( parent::toArray(), ['photo' => $this->photo->url('thumbnail')]);
	}
}