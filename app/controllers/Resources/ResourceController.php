<?php namespace Resources;

use BaseController;

use Input;

use Redirect;

use Response;

use View;

class ResourceController extends BaseController
{
	protected $layout = 'layouts.admin';

	public function index()
	{
		$resources = $this->repository->paginate(15);

		$view = sprintf('%s.index', $this->viewBaseName);

		$this->layout->nest('content', $view, compact('resources'));
	}

	public function show($id)
	{
		$resource = $this->repository->find($id);

		$view = sprintf('%s.show', $this->viewBaseName);

		$this->layout->nest('content', $view, compact('resource'));
	}

	public function create()
	{
		$view = sprintf('%s.create', $this->viewBaseName);

		$this->layout->nest('content', $view);
	}

	public function store()
	{
		$data = Input::except('_token');
		
		$resource = $this->repository->store($data);

		$this->show($resource->id);
	}

	public function update($id)
	{
		$data = Input::except('_token');
		
		$resource = $this->repository->update($data);

		$this->show($resource->id);
	}

	public function edit($id)
	{
		$resource = $this->repository->find($id);

		$view = sprintf('%s.edit', $this->viewBaseName);

		$this->layout->nest('content', $view, compact('resource'));
	}

	public function destroy($id)
	{
		if( $this->repository->destroy($id) )
		{
			$message = 'Eliminado.';
			$type = 'success';
		}else
		{
			$message = 'No se pudo eliminar';
			$type = 'danger';
		}

		return Redirect::route('admin.' . $this->resourceName . '.index')
				->with('message', $message)
				->with('type', $tpe);

		
	}
}