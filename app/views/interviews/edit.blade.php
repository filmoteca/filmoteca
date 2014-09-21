@section('content')

{{ Form::model( 
	$resource,
	[
		'route' => ['admin.interview.update', $resource->id], 
		'files' => true,
		'method'=> 'PUT',
		'class' => 'form-horizontal panel panel-default'
	])}}

	@section('content')

{{ Form::model( 
	$resource,
	[
		'route' => ['admin.interview.update', $resource->id], 
		'files' => true,
		'method'=> 'PUT',
		'class' => 'form-horizontal panel panel-default'
	])}}

	<div class="panel-heading">
		<h2>Editar entrevista</h2>
	</div>
	
	<div class="panel-body">

	{{ Form::formGroup('text','title','Título', 'interview_form') }}

	{{ Form::formGroup('textarea','body','Contenido', 'interview_form') }}

	{{ Form::formGroup('file','image', 'Fotografía', 'interview_form')}}

	<p><img src="{{ $resource->image->url('thumbnail') }}" class="image thumbnail"></p>

	{{ Form::formGroup('file','audio', 'Audio', 'interview_form')}}

	<p>
		<a href="{{ $resource->audio->url() }}" target="_blank">
			{{ $resource->audio->url()}}
		</a>
	</p>

	{{ Form::formGroup('file','video', 'Video', 'interview_form')}}

	<p>
		<a href="{{ $resource->video->url() }}" target="_blank">
			{{ $resource->video->url()}}
		</a>
	</p>




	</div>

	<div class="panel-footer">
		<button class="btn btn-success pull-right" type="submit">Editar</button>
		<div class="clearfix"></div>
	</div>

{{ Form::close() }}

@stop
	
	</div>

	<div class="panel-footer">
		<button class="btn btn-success pull-right" type="submit">Actualizar</button>
		<div class="clearfix"></div>
	</div>

{{ Form::close() }}

@stop