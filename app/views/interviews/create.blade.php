@section('content')

{{ Form::open( 
	[
		'route' => 'admin.interview.store', 
		'files' => true,
		'method'=> 'POST',
		'class' => 'form-horizontal panel panel-default'
	])}}

	<div class="panel-heading">
		<h2>Agregar Entrevista</h2>
	</div>
	
	<div class="panel-body">

	{{ Form::formGroup('text','title','Título', 'interview_form') }}

	{{ Form::formGroup('textarea','body','Contenido', 'interview_form') }}

	{{ Form::formGroup('file','image', 'Fotografía', 'interview_form')}}

	{{ Form::formGroup('file','audio', 'Audio', 'interview_form')}}

	{{ Form::formGroup('file','video', 'Video', 'interview_form')}}

	</div>

	<div class="panel-footer">
		<button class="btn btn-success pull-right" type="submit">Agregar</button>
		<div class="clearfix"></div>
	</div>

{{ Form::close() }}

@stop