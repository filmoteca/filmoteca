@section('content')

{{ Form::open( 
	array(
		'route' => 'admin.film.store', 
		'files' => true,
		'method'=> 'post',
		'class' => 'form-horizontal panel panel-default'))}}

	<div class="panel-heading">
		<h2>Agregar película</h2>
	</div>
	
	<div class="panel-body">

	{{ Form::formGroup('text','title','Título', 'film_form',
				array('ng-required' => 'true')) }}

	{{ Form::years() }}

	{{ Form::countries() }}

	{{ Form::formGroup('text','duration','Duración', 'film_form')}}

	{{ Form::genres() }}

	{{ Form::formGroup('text','director','Director', 'film_form')}}

	{{ Form::formGroup('text','script','Guión', 'film_form')}}

	{{ Form::formGroup('text','photographic','Fotografía', 'film_form')}}

	{{ Form::formGroup('text','music','Música', 'film_form')}}

	{{ Form::formGroup('text','edition','Edición', 'film_form')}}

	{{ Form::formGroup('text','production','Producción', 'film_form')}}

	{{ Form::formGroup('text','cast','Reparto', 'film_form')}}

	{{ Form::formGroup('text','synopsis','Sinopsis', 'film_form')}}

	</div>

	<div class="panel-footer">
		<button class="btn btn-success pull-right" type="submit">Agregar</button>
		<div class="clearfix"></div>
	</div>

{{ Form::close() }}

@stop