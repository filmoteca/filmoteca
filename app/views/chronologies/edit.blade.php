@section('content')

{{ Form::model(
	$resource,
	[
		'route' => ['admin.chronology.update', $resource->id], 
		'files' => false,
		'method'=> 'PUT',
		'class' => 'form-horizontal panel panel-default'
	])}}

	<div class="panel-heading">
		<h2>Editar cronología</h2>
	</div>
	
	<div class="panel-body">

	{{ Form::formGroup('year','year','Año', 'edit_form') }}

	{{ Form::formGroup('textarea','description','Descripción', 'edit_form') }}

	</div>

	<div class="panel-footer">
		<button class="btn btn-success pull-right" type="submit">Actualizar</button>
		<div class="clearfix"></div>
	</div>

{{ Form::close() }}

@stop