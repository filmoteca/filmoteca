@section('content')

<h2>Detalles del ganador</h2>

<div class="text-right">
{{ Form::open(array('route' => array('admin.filmotecaMedal.destroy', $resource->id), 'method'=> 'DELETE')) }}
				<button class="btn btn-danger navbar-btn" type="submit">Borrar</button>

{{ HTML::linkRoute('admin.filmotecaMedal.edit', 'Editar',
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
			<th>Nombre</th>
			<td>{{$resource->name }}</td>
		</tr>
		<tr>
			<th>Fecha en la que se le otorgó</th>
			<td>{{$resource->award_date }}</td>
		</tr>
		<tr>
			<th>Biografía</th>
			<td>{{$resource->biography }}</td>
		</tr>
	</tbody>
</table>

<div class="text-right">
{{ Form::open(array('route' => array('admin.filmotecaMedal.destroy', $resource->id), 'method'=> 'DELETE')) }}
				<button class="btn btn-danger navbar-btn" type="submit">Borrar</button>

{{ HTML::linkRoute('admin.filmotecaMedal.edit', 'Editar',
	array($resource->id),
	array('class'=> 'btn btn-info navbar-btn')) }}

{{ Form::close()}}
</div>

<p>Fotografía (340X250): <img src="{{ $resource->image->url('thumbnail')}}"></p>
<p>Fotografía (original): <img src="{{ $resource->image->url()}}"></p>

@stop