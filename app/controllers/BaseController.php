<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	/**
	 * Inyecta el almacen a cada controlador si la variable repositoryName
	 * ha sido definida.
	 */
	public function __construct(){

		if ( isset( $this->repositoryName ) )
		{
			$this->repository = App::make( $this->repositoryName);
		}
	}
}
