@section('content')

<h2>Detalles de noticias</h2>

<div class="text-right">
{{ Form::open(array('route' => array('admin.student.destroy', $resource->id), 'method'=> 'DELETE')) }}
				<button class="btn btn-danger navbar-btn" type="submit">Borrar</button>

{{ HTML::linkRoute('admin.student.edit', 'Editar',
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
			<th>Apellido paterno</th>
			<td>{{$resource->last_name }}</td>
		</tr>
		<tr>
			<th>Apellido materno</th>
			<td>{{$resource->second_last_name }}</td>
		</tr>
		<tr>
			<th>Matricula</th>
			<td>{{$resource->enrolment }}</td>
		</tr>
		<tr>
			<th>Teléfono</th>
			<td>{{$resource->telephone }}</td>
		</tr>
		<tr>
			<th>Celular</th>
			<td>{{$resource->mobile }}</td>
		</tr>
		<tr>
			<th>Email</th>
			<td>{{$resource->email }}</td>
		</tr>
		<tr>
			<th>Perteneciente a la UNAM</th>
			<td>
			@if( $resource->unam_member )
				Sí
			@else
				No
			@endif
			</td>
		</tr>
		<tr>
			<th>Estado en el sistema</th>
			<td>
			@if( $resource->status == 'active' )
				Activo
			@else 
				Inactivo
			@endif
			</td>
		</tr>
	</tbody>
</table>

<div class="text-right">
{{ Form::open(array('route' => array('admin.student.destroy', $resource->id), 'method'=> 'DELETE')) }}
				<button class="btn btn-danger navbar-btn" type="submit">Borrar</button>

{{ HTML::linkRoute('admin.student.edit', 'Editar',
	array($resource->id),
	array('class'=> 'btn btn-info navbar-btn')) }}

{{ Form::close()}}
</div>

@stop