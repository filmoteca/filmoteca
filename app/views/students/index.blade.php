@section('content')

<h2>Lista de estudiantes</h2>

{{ $resources->links() }}

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellido materno</th>
			<th>Apellido patterno</th>
			<th>Matricula</th>
			<th>Teléfono</th>
			<th>Celular</th>
			<th>Email</th>
			<th>Perteneciente a la UNAM</th>
			<th>Estado en el sistema</th>
			<th>Acciones</th>
		</tr>
	</thead>
	
	<tbody>
		@foreach($resources as $student )
			<tr>
				<td>{{ $student->id }}</td>
				<td>{{ $student->name }}</td>
				<td>{{ $student->last_name }}</td>
				<td>{{ $student->second_last_name }}</td>
				<td>{{ $student->enrolment }}</td>
				<td>{{ $student->telephone }}</td>
				<td>{{ $student->mobile }}</td>
				<td>{{ $student->email }}</td>
				<td>
				@if( $student->unam_member )
					Sí
				@else
					No
				@endif
				</td>
				<td>
				@if( $student->status == 'active' )
					Activo
				@else 
					Inactivo
				@endif
				</td>
				<td>

					{{ HTML::linkRoute('admin.student.show', 'Ver',
						array($student->id),
						array('class'=> 'btn btn-success')) }}
					<br>
					{{ HTML::linkRoute('admin.student.edit', 'Editar',
						array($student->id),
						array('class'=> 'btn btn-info')) }}
					<br>
					{{ Form::open(array('route' => array('admin.student.destroy', $student->id), 'method'=> 'DELETE')) }}
						<button class="btn btn-danger" type="submit">Borrar</button>
					{{ Form::close()}}
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop