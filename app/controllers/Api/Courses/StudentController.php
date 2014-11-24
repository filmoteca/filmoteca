<?php namespace Api\Courses;

use Api\ApiController;
use Hash;
use Input;
use Filmoteca\Repository\Courses\StudentsRepository;
use Mail;
use Redirect;
use Response;
use Sentry;

class StudentController extends ApiController{

	public function __construct(StudentsRepository $repository){

		$this->repository = $repository;
	}

	public function recoverPassword(){

		$student = $this->repository->findByEmail(Input::get('email'));
		
		if( empty($student) ){

			return Response::json([
				'success' => false,
				'message' => 'No se encontro ningún usuario con ese email.'], 200 );
		}

		$student->password = Hash::make( generate_password() );

		$student->save();

		Mail::queue('email.courses.recover-password', compact('student'), function($message) use ($student){

			$message->to($student->email, $student->name )
					->subject('Filmoteca: nueva de contraseña');
		});

		return Response::json([
			'message' => 'Nueva contraseña enviada. El correo podría tardar unos minutos en llegar.'],200);
	}

	public function login(){

		$student = $this->repository->findByEmail(Input::get('email'));

		if( empty($student) ){

			return Response::json([
				'success' => false,
				'message' => 'No se encontro ningún usuario con ese email.'], 200 );
		}

		if( Hash::check(Input::get('password'), $student->password ) )
		{
			
			return Response::json([
				'success' => true]);	
		}else{
			return Response::json([
				'success' => false,
				'message' => 'La contraseña es incorrecta']);
		}
	}

	public function signup(){

		// TODO validate
		
		$password = generate_password();

		$user = Sentry::register(array(
			'email'    => Input::get('email'),
			'password' => $password
		));

		$student_data = Input::except('photo');

		$student_data['user_id'] = $user->id;

		$student = $this->repository->store( $student_data );

		Mail::queue('emails.courses.verification', 
			[
				'student' => $student, 
				'password' => $password,
				'activation_code' => $user->getActivationCode()
			], 
			function($message) use ($student){

			$message->to($student->email, $student->name )
					->subject('Filmoteca UNAM: Verificación de email');
		});
	}

	public function verify(){

		$user = Sentry::findUserByActivationCode(Input::get('activation_code'));

		$user->activated = true;

		$user->save();

		return Redirect::to('/courses/app')->with('message','Cuenta activada.');
	}
}