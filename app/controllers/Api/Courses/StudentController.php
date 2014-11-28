<?php namespace Api\Courses;

use Api\ApiController;
use Hash;
use Input;
use Filmoteca\Repository\Courses\StudentsRepository;
use Log;
use Mail;
use Redirect;
use Response;
use Sentry;

class StudentController extends ApiController{

	public function __construct(StudentsRepository $repository){

		$this->repository = $repository;
	}

	public function recoverPassword(){

		$user = Sentry::findUserByLogin(Input::get('email'));

		$password = generate_password();

		$user->password = $password;

		$user->save();

		$student = $this->repository->findByEmail(Input::get('email'));

		Mail::queue('emails.courses.recover-password', compact('password', 'student'), function($message) use ($user, $student){

			$message->to($student->email, $student->name )
					->subject('Filmoteca: nueva de contraseña');
		});

		return Response::json([
			'message' => 'Se ah enviado un mensaje a tu correo electronico con la nueva contraseña.']);
	}

	public function login(){

		$student = Sentry::findUserByCredentials([
			'email' => Input::get('email'),
			'password' => Input::get('password')]
			);

		Sentry::login($student, true);

		return Response::json( $this->repository->findByEmail(Input::get('email') ) );
	}

	public function logout(){

		Sentry::logout();
	}

	public function signup(){

		// TODO validate
		
		$password = generate_password();

		$user = Sentry::register(array(
			'email'    => Input::get('email'),
			'password' => $password,
			'username' => Input::get('name') . '.' . Input::get('last_name') . '.' . Input::get('second_last_name') . '.' . rand(1,10)
		));

		$student_data = Input::all();

		$student_data['user_id'] = $user->id;

		$this->repository->store( $student_data );

		Mail::queue('emails.courses.verification', [
				'student' => Input::except('photo'), 
				'password' => $password,
				'activation_code' => $user->getActivationCode()
			], 
			function($message){

			$message->to(Input::get('email'), Input::get('name') )
					->subject('Filmoteca UNAM: Verificación de email');
		});
	}

	public function verify(){

		$user = Sentry::findUserByActivationCode(Input::get('activation_code'));

		$user->activated = true;

		$user->save();

		return Redirect::to('/courses/app')->with('message','Cuenta activada.');
	}

	public function changePassword(){

		$user = Sentry::getUser();

		Sentry::findUserByCredentials([
			'email' => $user->email,
			'password' => Input::get('old_password')]);

		$user->password = Input::get('new_password');

		$user->save();
	}

	public function update(){

		if( Input::file('photo')){
			$this->repository->update(Input::get('id'), Input::except('id'));
		}else{
			$this->repository->update(Input::get('id'), Input::except('id','photo'));
		}


		return Response::json(
			$this->repository->find(Input::get('id'))
			);
	}
}