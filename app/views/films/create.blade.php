@section('content')

{{ Form::open(
	[
		'route' => 'admin.film.store',
		'files' => true,
		'method'=> 'POST',
		'class' => 'form-horizontal panel panel-default'
	])}}

	<div class="panel-heading">
		<h2>Agregar película</h2>
	</div>

	<div class="panel-body">

	@include('films.fields')

	</div>

	<div class="panel-footer">
		<button class="btn btn-success pull-right" type="submit">Agregar</button>
		<div class="clearfix"></div>
	</div>

{{ Form::close() }}

@stop
