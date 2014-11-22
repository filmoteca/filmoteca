@section('content')

<h2>Lista de Profesores</h2>

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
		@foreach($resources as $professor )
			<tr>
				<td>{{ $professor->id }}</td>
				<td>{{ $professor->name }}</td>

				<td>
					{{ HTML::linkRoute('admin.professor.show', 'Ver',
						array($professor->id),
						array('class'=> 'btn btn-success')) }}
					<br>
					{{ HTML::linkRoute('admin.professor.edit', 'Editar',
						array($professor->id),
						array('class'=> 'btn btn-info')) }}
					<br>
					{{ Form::open(array('route' => array('admin.professor.destroy', $professor->id), 'method'=> 'DELETE')) }}
						<button class="btn btn-danger" type="submit">Borrar</button>
					{{ Form::close()}}
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop