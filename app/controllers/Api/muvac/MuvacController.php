<?php namespace Api\Courses;

use Api\ApiController;
use Filmoteca\Models\Courses\Student;
use Filmoteca\Models\Courses\Course;
use Filmoteca\Repository\Courses\CoursesRepository;
use Filmoteca\Models\Courses\StudentIsAlreadySignupException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Response;
use Sentry;

class CourseController extends ApiController{

	public function __construct(CoursesRepository $repository){

		$this->repository = $repository;
	}

	public function signup($course_id){

		$user = Sentry::getUser();

		$student = Student::where('email', $user->email)->first();

		if( empty($student) ){

			throw new ModelNotFoundException('Estudiante no encontrado');
		}

		$course = Course::findOrFail($course_id);

		try{
			$course->students()->attach($student->id, ['payment_status'=>'not_paid']);
		}catch(QueryException $e){
			throw new StudentIsAlreadySignupException("Ya estás registrado en este curso");
			
		}
	}

	public function show($id){

		return Response::json(Course::findOrFail($id));
	}

	public function index(){

		$courses = $this->repository->openedCourses();

		return Response::json($courses);
	}
}