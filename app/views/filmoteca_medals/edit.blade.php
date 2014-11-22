@section('content')

{{ Form::model( 
	$resource,
	[
		'route' => ['admin.filmotecaMedal.update', $resource->id], 
		'files' => true,
		'method'=> 'PUT',
		'class' => 'form-horizontal panel panel-default'
	])}}

	<div class="panel-heading">
		<h2>Editar ganador</h2>
	</div>
	
	<div class="panel-body">

	{{ Form::formGroup('text','name','Nombre', 'filmoteca_medal_form') }}

	{{ Form::formGroup('date','award_date','Fecha en la que se le otorgó', 'filmoteca_medal_form') }}

	{{ Form::formGroup('textarea','biography','Biografía', 'filmoteca_medal_form') }}

	{{ Form::formGroup('file','image', 'Fotografía', 'filmoteca_medal_form')}}

	<p>Fotografía actual (miníatura) <img src="{{ $resource->image->url('thumbnail') }}" class="image thumbnail"></p>
	
	</div>

	<div class="panel-footer">
		<button class="btn btn-success pull-right" type="submit">Actualizar</button>
		<div class="clearfix"></div>
	</div>

{{ Form::close() }}

@stop