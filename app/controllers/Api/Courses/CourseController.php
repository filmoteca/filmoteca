<?php namespace Api\Courses;

use Api\ApiController;
use Sentry;
use Filmoteca\Models\Courses\Student;
use Filmoteca\Models\Courses\Course;
use Filmoteca\Models\Courses\StudentIsAlreadySignupException;
use Exception;
use Illuminate\Database\QueryException;

class CourseController extends ApiController{

	public function signup($course_id){

		$user = Sentry::getUser();

		$student = Student::where('email', $user->email)->first();

		if( empty($student) ){

			throw new Exception('Estudiante no encontrado');
		}

		$course = Course::findOrFail($course_id);

		try{
			$course->students()->attach($student->id, ['payment_status'=>'not_paid']);
		}catch(QueryException $e){
			throw new StudentIsAlreadySignupException("Ya estás registrado en este curso");
			
		}
	}
}