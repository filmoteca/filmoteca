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

	{{ Form::formGroup('text','title','Título', 'film_form',
				array('ng-required' => 'true')) }}

	{{ Form::formGroup('text','title','Título', 'film_form') }}

	{{ Form::formGroup('year', 'year', 'Año', 'film_form') }}

	{{ Form::formGroup('country', 'country_id', 'País', 'film_form') }}

	{{ Form::formGroup('text','duration','Duración','film_form')}}

	{{ Form::formGroup('genre', 'genre_id', 'Genero', 'film_form') }}

	{{ Form::formGroup('text','director','Director', 'film_form')}}

	{{ Form::formGroup('text','script','Guión', 'film_form')}}

	{{ Form::formGroup('text','photographic','Fotografía', 'film_form')}}

	{{ Form::formGroup('text','music','Música', 'film_form')}}

	{{ Form::formGroup('text','edition','Edición', 'film_form')}}

	{{ Form::formGroup('text','production','Producción', 'film_form')}}

	{{ Form::formGroup('text','cast','Reparto', 'film_form')}}

	{{ Form::formGroup('text','synopsis','Sinopsis', 'film_form')}}

	{{ Form::formGroup('file','image', 'Portada', 'film_form')}}

	<p>Portada actual (miníatura) <img src="{{ $resource->image->url('thumbnail') }}" class="image thumbnail"></p>

	</div>

	<div class="panel-footer">
		<button class="btn btn-success pull-right" type="submit">Actualizar</button>
		<div class="clearfix"></div>
	</div>

{{ Form::close() }}

@stop