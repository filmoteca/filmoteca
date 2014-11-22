@section('content')

<h2>Lista de cursos</h2>

{{ $resources->links() }}

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Acciones</th>
		</tr>
	</thead>
	
	<tbody>
		@foreach($resources as $course )
			<tr>
				<td>{{ $course->id }}</td>
				<td>{{ $course->name }}</td>
				<td>
					{{ HTML::linkRoute('admin.course.show', 'Ver',
						array($course->id),
						array('class'=> 'btn btn-success')) }}
					<br>
					{{ HTML::linkRoute('admin.course.edit', 'Editar',
						array($course->id),
						array('class'=> 'btn btn-info')) }}
					<br>
					{{ Form::open(array('route' => array('admin.course.destroy', $course->id), 'method'=> 'DELETE')) }}
						<button class="btn btn-danger" type="submit">Borrar</button>
					{{ Form::close()}}
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop