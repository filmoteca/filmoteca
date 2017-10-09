@section('content')

<h2>Detalles del libro</h2>

<div class="text-right">
{{ Form::open(array('route' => array('admin.consultaLibro.destroy', $resource->id), 'method'=> 'DELETE')) }}
				<button class="btn btn-danger navbar-btn" type="submit">Borrar</button>

{{ HTML::linkRoute('admin.consultaLibro.edit', 'Editar',
	array($resource->id),
	array('class'=> 'btn btn-info navbar-btn')) }}

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
			<th>Título</th>
			<td>{{$resource->title }}</td>
		</tr>
		<tr>
			<th>Fecha del libro</th>
			<td>{{$resource->award_date }}</td>
		</tr>
		<tr>
			<th>Indice</th>
			<td>{{$resource->indice }}</td>
		</tr>
		<tr>
			<th>Sinopsis</th>
			<td>{{$resource->sinopsis }}</td>
		</tr>
	</tbody>
</table>

<div class="text-right">
{{ Form::open(array('route' => array('admin.consultaLibro.destroy', $resource->id), 'method'=> 'DELETE')) }}
				<button class="btn btn-danger navbar-btn" type="submit">Borrar</button>

{{ HTML::linkRoute('admin.consultaLibro.edit', 'Editar',
	array($resource->id),
	array('class'=> 'btn btn-info navbar-btn')) }}

{{ Form::close()}}
</div>

<p>Portada (340X250): <img src="{{ $resource->image->url('thumbnail')}}"></p>
<p>Portada (original): <img src="{{ $resource->image->url()}}"></p>

@stop