@section('content')

<h2>Detalles de horario</h2>

<div class="text-right">
{{ Form::open(array('route' => array('admin.courseSchedule.destroy', $resource->id), 'method'=> 'DELETE')) }}
				<button class="btn btn-danger navbar-btn" type="submit">Borrar</button>

{{ HTML::linkRoute('admin.courseSchedule.edit', 'Editar',
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
			<th>Curso</th>
			<td>{{$resource->course->name }}</td>
		</tr>
		<tr>
			<th>Professor</th>
			<td>{{$resource->professor->name }}</td>
		</tr>
		<tr>
			<th>Venue</th>
			<td>{{$resource->venue->name }}</td>
		</tr>
		<tr>
			<th>Horas totales</th>
			<td>{{$resource->total_hours }}</td>
		</tr>
		<tr>
			<th>Horario</th>
			<td>{{$resource->schedule }}</td>
		</tr>
		<tr>
			<th>Fecha de inicio</th>
			<td>{{$resource->start_date }}</td>
		</tr>
		<tr>
			<th>Fecha de termino</th>
			<td>{{$resource->end_date }}</td>
		</tr>
		<tr>
			<th>Precio general</th>
			<td>{{$resource->general_price }}</td>
		</tr>
		<tr>
			<th>Precio comunidad UNAM</th>
			<td>{{$resource->unam_member_price }}</td>
		</tr>
	</tbody>
</table>

<div class="text-right">
{{ Form::open(array('route' => array('admin.courseSchedule.destroy', $resource->id), 'method'=> 'DELETE')) }}
				<button class="btn btn-danger navbar-btn" type="submit">Borrar</button>

{{ HTML::linkRoute('admin.courseSchedule.edit', 'Editar',
	array($resource->id),
	array('class'=> 'btn btn-info navbar-btn')) }}

{{ Form::close()}}
</div>

@stop