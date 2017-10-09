@section('content')

{{ Form::open( 
	[
		'route' => 'admin.consultaLibro.store', 
		'files' => true,
		'method'=> 'POST',
		'class' => 'form-horizontal panel panel-default'
	])}}

	<div class="panel-heading">
		<h2>Agregar Libro</h2>
	</div>
	
	<div class="panel-body">

	{{ Form::formGroup('text','title','Título', 'consulta_libro_form', ['required' => true]) }}

	{{ Form::formGroup('date','award_date','Fecha del libro', 'consulta_libro_form', ['required' => true]) }}

	{{ Form::formGroup('textarea','indice','Indice', 'consulta_libro_form', ['required' => true]) }}

	{{ Form::formGroup('textarea','sinopsis','Sinopsis', 'consulta_libro_form', ['required' => true]) }}

	{{ Form::formGroup('file','image', 'Portada', 'consulta_libro_form', ['required' => true])}}

	</div>

	<div class="panel-footer">
		<button class="btn btn-success pull-right" type="submit">Agregar</button>
		<div class="clearfix"></div>
	</div>

{{ Form::close() }}

@stop