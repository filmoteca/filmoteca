@section('content')

{{ Form::open( 
	[
		'route' => 'admin.catalog.store', 
		'files' => true,
		'method'=> 'POST',
		'class' => 'form-horizontal panel panel-default'
	])}}

	<div class="panel-heading">
		<h2>Agregar catálogo</h2>
	</div>
	
	<div class="panel-body">

	{{ Form::formGroup('file','pdf', 'Pdf', 'catalog_form')}}

	</div>

	<div class="panel-footer">
		<button class="btn btn-success pull-right" type="submit">Agregar</button>
		<div class="clearfix"></div>
	</div>

{{ Form::close() }}

@stop