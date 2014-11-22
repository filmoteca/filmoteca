@section('content')

<h2>Lista de horarios</h2>

{{ $resources->links() }}

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Curso</th>
			<th>Pofesor</th>
			<th>Sede</th>
			<th>Total de horas</th>
			<th>Horario</th>
			<th>Fecha de inicio</th>
			<th>Feche de termino</th>
			<th>Precio general</th>
			<th>Precio UNAM</th>
			<th>Acciones</th>
		</tr>
	</thead>
	
	<tbody>
		@foreach($resources as $schedule )
			<tr>
				<td>{{ $schedule->id }}</td>
				<td>{{ $schedule->course->name }}</td>
				<td>{{ $schedule->professor->name }}</td>
				<td>{{ $schedule->venue->name }}</td>
				<td>{{ $schedule->total_hours }}</td>
				<td>{{ $schedule->schedule }}</td>
				<td>{{ $schedule->start_date }}</td>
				<td>{{ $schedule->end_date }}</td>
				<td>{{ $schedule->general_price }}</td>
				<td>{{ $schedule->unam_member_price}}</td>

				<td>
					{{ HTML::linkRoute('admin.courseSchedule.show', 'Ver',
						array($schedule->id),
						array('class'=> 'btn btn-success')) }}
					<br>
					{{ HTML::linkRoute('admin.courseSchedule.edit', 'Editar',
						array($schedule->id),
						array('class'=> 'btn btn-info')) }}
					<br>
					{{ Form::open(array('route' => array('admin.courseSchedule.destroy', $schedule->id), 'method'=> 'DELETE')) }}
						<button class="btn btn-danger" type="submit">Borrar</button>
					{{ Form::close()}}
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop