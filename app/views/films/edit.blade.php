@section('content')

{{ Form::model(
	$resource,
	array(
		'route' => array('admin.film.update', $resource->id),
		'files' => true,
		'method'=> 'PUT',
		'class' => 'form-horizontal panel panel-default'))}}
	<div class="panel-heading">
		<h2>Editar película</h2>
	</div>

	<div class="panel-body">

	@include('films.fields')

	<p>Portada actual (miníatura) <img src="{{ $resource->image->url('thumbnail') }}" class="image thumbnail"></p>

	</div>

	<div class="panel-footer">
		<button class="btn btn-success pull-right" type="submit">Actualizar</button>
		<div class="clearfix"></div>
	</div>

{{ Form::close() }}

@stop