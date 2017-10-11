@section('content')

{{ Form::model(
	$resource,
	[
		'route' => ['admin.consultaLibro.update', $resource->id],
		'files' => true,
		'method'=> 'PUT',
		'class' => 'form-horizontal panel panel-default'
	])}}

	<div class="panel-heading">
		<h2>Editar libro</h2>
	</div>

	<div class="panel-body">

	{{ Form::formGroup('text','title','Título', 'consulta_libro_form', ['required' => true]) }}

	{{ Form::formGroup('date','book_date','Fecha del libro', 'consulta_libro_form') }}

	{{ Form::formGroup('textarea','indice','Indice', 'consulta_libro_form', ['required' => true]) }}

	{{ Form::formGroup('textarea','sinopsis','Sinopsis', 'consulta_libro_form', ['required' => true]) }}

	{{ Form::formGroup('file','image', 'Portada', 'consulta_libro_form')}}

	<p>Portada actual (miníatura) <img src="{{ $resource->image->url('thumbnail') }}" class="image thumbnail"></p>

	</div>

	<div class="panel-footer">
		<button class="btn btn-success pull-right" type="submit">Actualizar</button>
		<div class="clearfix"></div>
	</div>

{{ Form::close() }}

@stop
