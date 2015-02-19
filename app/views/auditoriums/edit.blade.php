@section('content')

{{ Form::model( 
	$resource,
	[
		'route' => ['admin.auditorium.update', $resource->id], 
		'files' => true,
		'method'=> 'PUT',
		'class' => 'form-horizontal panel panel-default'
	])}}

	<div class="panel-heading">
		<h2>Editar sala</h2>
	</div>
	
	<div class="panel-body">

	{{ Form::formGroup('text','name','Nombre', 'auditorium_form') }}

	{{ Form::formGroup('text','address','Dirección', 'auditorium_form') }}

	{{ Form::formGroup('text','telephone','Teléfono', 'auditorium_form') }}

	{{ Form::formGroup('text','schedule','Horario', 'auditorium_form') }}

	{{ Form::formGroup('text','general_cost','Costo general', 'auditorium_form') }}

	{{ Form::formGroup('text','special_cost','Costo especial', 'auditorium_form') }}

	{{ Form::formGroup('auditorium', 'venue_id', 'Sede', 'auditorium_form')}}

	{{ Form::formGroup('textarea','map','Mapa', 'auditorium_form', ['class' => 'no-ckeditor']) }}

	{{ Form::formGroup('file','image', 'Portada', 'auditorium_form')}}

	<p>Portada actual (miníatura) <img src="{{ $resource->image->url('thumbnail') }}" class="image thumbnail"></p>
	
	</div>

	<div class="panel-footer">
		<button class="btn btn-success pull-right" type="submit">Actualizar</button>
		<div class="clearfix"></div>
	</div>

{{ Form::close() }}

@stop