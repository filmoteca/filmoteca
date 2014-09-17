@section('content')

<h2>Detalles de películas</h2>

<div class="text-right">
{{ Form::open(array('route' => array('admin.film.destroy', $resource->id), 'method'=> 'DELETE')) }}
				<button class="btn btn-danger navbar-btn" type="submit">Borrar</button>

{{ HTML::linkRoute('admin.film.edit', 'Editar',
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
			<th>Año</th>
			<td>{{$resource->year }}</td>
		</tr>
		<tr>
			<th>Páis</th>
			<td>{{$resource->country_id }}</td>
		</tr>
		<tr>
			<th>Genero</th>
			<td>{{$resource->genre_id }}</td>
		</tr>
		<tr>
			<th>Director</th>
			<td>{{$resource->director }}</td>
		</tr>
		<tr>
			<th>Guión</th>
			<td>{{$resource->script }}</td>
		</tr>
		<tr>
			<th>Música</th>
			<td>{{$resource->music }}</td>
		</tr>
		<tr>
			<th>Edición</th>
			<td>{{$resource->edition }}</td>
		</tr>
		<tr>
			<th>Producción</th>
			<td>{{$resource->production }}</td>
		</tr>
		<tr>
			<th>Reparto</th>
			<td>{{$resource->reparto }}</td>
		</tr>
		<tr>
			<th>Sinopsis</th>
			<td>{{$resource->sinopsis }}</td>
		</tr>
		<tr>
			<th>Director</th>
			<td>{{$resource->director }}</td>
		</tr>
	</tbody>
</table>

<div class="text-right">
{{ Form::open(array('route' => array('admin.film.destroy', $resource->id), 'method'=> 'DELETE')) }}
				<button class="btn btn-danger navbar-btn" type="submit">Borrar</button>

{{ HTML::linkRoute('admin.film.edit', 'Editar',
	array($resource->id),
	array('class'=> 'btn btn-info navbar-btn')) }}

{{ Form::close()}}
</div>

<p>Image (thumbnail): <img src="{{ $resource->image->url('thumbnail')}}"></p>
<p>Image (mediana): <img src="{{ $resource->image->url('medium')}}"></p>
<p>Image (original): <img src="{{ $resource->image->url()}}"></p>

@stop