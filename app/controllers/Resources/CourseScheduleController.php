<?php namespace Resources;

use Filmoteca\Repository\Courses\CourseSchedulesRepository;

class CourseScheduleController extends ResourceController
{
	protected $viewBaseName = 'course_schedules';

	protected $resourceName = 'courseSchedule';

	public function __construct(CourseSchedulesRepository $repository)
	{
		$this->repository = $repository;
	}
}