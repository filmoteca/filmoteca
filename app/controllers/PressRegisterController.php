<?php

use Filmoteca\Models\Press\PressRegister;

class PressRegisterController extends BaseController {

	public function __construct(PressRegister $pr){

		$this->pressRegister = $pr;
	}

	public function index(){

		$registers = $this->pressRegister->paginate(15);

		return View::make('press_registers.index', compact('registers'));
	}

	public function create(){
		return View::make('press_registers.create');
	}

	public function store(){

		$this->pressRegister->create(Input::except('_token'));

		return Redirect::route('press_register.create')->with('message', 'Registrado')->with('type','success');
	}

	public function destroy($id){

		if( $this->pressRegister->destroy($id) )
		{
			$message = 'Eliminado.';
			$type = 'success';
		}else
		{
			$message = 'No se pudo eliminar';
			$type = 'danger';
		}

		return Redirect::route('admin.press_register.index')
				->with('message', $message)
				->with('type', $type);
	}
}
