<?php namespace Filmoteca\Repository\Courses;

use Carbon\Carbon;
use Filmoteca\Models\Courses\Course;
use Filmoteca\Repository\ResourcesRepository;

class CoursesRepository extends ResourcesRepository
{
	public function __construct(Course $model){

		$this->resource = $model;
	}

	public function openedCourses(){

		$today = Carbon::today();

		return Course::where('start_date', '>=', $today->toDateString())
			->with('professor')
			->with('venue')
			->with('subject')
			->get();
	}
}