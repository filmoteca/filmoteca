<?php namespace Api\Courses;

use Api\ApiController;
use Sentry;
use Filmoteca\Models\Courses\Student;
use Filmoteca\Models\Courses\Course;
use Exception;

class CourseController extends ApiController{

	public function signup($course_id){

		$user = Sentry::getUser();

		$student = Student::where('email', $user->email)->first();

		if( empty($student) ){

			throw new Exception('Estudiante no encontrado');
		}

		$course = Course::findOrFail($course_id);

		$course->students()->attach($student->id, ['payment_status'=>'not_paid']);
	}
}