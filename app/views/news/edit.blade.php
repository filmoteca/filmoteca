@section('content')

{{ Form::model( 
	$resource,
	[
		'route' => ['admin.news.update', $resource->id], 
		'files' => true,
		'method'=> 'PUT',
		'class' => 'form-horizontal panel panel-default'
	])}}

	<div class="panel-heading">
		<h2>Editar noticia</h2>
	</div>
	
	<div class="panel-body">

	{{ Form::formGroup('text','title','Título', 'news_form') }}

	{{ Form::formGroup('textarea','body','Noticia', 'news_form') }}

	{{ Form::formGroup('file','image', 'Icono', 'news_form')}}

	<p>Icono actual (miníatura) <img src="{{ $resource->image->url('thumbnail') }}" class="image thumbnail"></p>
	
	</div>

	<div class="panel-footer">
		<button class="btn btn-success pull-right" type="submit">Actualizar</button>
		<div class="clearfix"></div>
	</div>

{{ Form::close() }}

@stop