@section('content')

<h2>Detalles de catálogo</h2>

<div class="text-right">
{{ Form::open(array('route' => array('admin.catalog.destroy', $resource->id), 'method'=> 'DELETE')) }}
	<button class="btn btn-danger navbar-btn" type="submit">Borrar</button>

{{ Form::close()}}
</div>

<table class="table bordered condensed">
	<thead>
		<tr>
			<th>Campo</th>
			<th>Valor</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>ID</th>
			<td>{{$resource->id }}</td>
		</tr>
		<tr>
			<th>Nombre</th>
			<td><a href="{{ $resource->pdf->url() }}">Link</a></td>
		</tr>
	</tbody>
</table>

<div class="text-right">
{{ Form::open(array('route' => array('admin.catalog.destroy', $resource->id), 'method'=> 'DELETE')) }}
	<button class="btn btn-danger navbar-btn" type="submit">Borrar</button>
{{ Form::close()}}
</div>

@stop