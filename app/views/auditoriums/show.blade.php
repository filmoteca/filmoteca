@section('content')

<h2>Detalles de películas</h2>

<div class="text-right">
{{ Form::open(array('route' => array('admin.auditorium.destroy', $resource->id), 'method'=> 'DELETE')) }}
				<button class="btn btn-danger navbar-btn" type="submit">Borrar</button>

{{ HTML::linkRoute('admin.auditorium.edit', 'Editar',
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
			<th>Dirección</th>
			<td>{{ $resource->address }}</td>
		</tr>
		<tr>
			<th>Teléfono</th>
			<td>{{ $resource->telephone }}</td>
		</tr>
		<tr>
			<th>Horario</th>
			<td>{{ $resource->schedule }}</td>
		</tr>
		<tr>
			<th>Costo general</th>
			<td>{{ $resource->general_cost }}</td>
		</tr>
		<tr>
			<th>Costo especial</th>
			<td>{{ $resource->special_cost }}</td>
		</tr>
		<tr>
			<th>Sede</th>
			<td>{{ (isset($resource->venue))? $resource->venue->name : 'Ninguna' }}</td>
		</tr>
		<tr>
			<th>Mapa</th>
			<td>{{ $resource->map }}</td>
		</tr>
	</tbody>
</table>

<div class="text-right">
{{ Form::open(array('route' => array('admin.auditorium.destroy', $resource->id), 'method'=> 'DELETE')) }}
				<button class="btn btn-danger navbar-btn" type="submit">Borrar</button>

{{ HTML::linkRoute('admin.auditorium.edit', 'Editar',
	array($resource->id),
	array('class'=> 'btn btn-info navbar-btn')) }}

{{ Form::close()}}
</div>

<p>Image (thumbnail): <img src="{{ $resource->image->url('thumbnail')}}"></p>
<p>Image (mediana): <img src="{{ $resource->image->url('medium')}}"></p>
<p>Image (original): <img src="{{ $resource->image->url()}}"></p>

@stop