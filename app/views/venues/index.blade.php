@section('content')

<h2>Lista de sedes</h2>

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
		@foreach($resources as $venue )
			<tr>
				<td>{{ $venue->id }}</td>
				<td>{{ $venue->name }}</td>

				<td>
					{{ HTML::linkRoute('admin.venue.show', 'Ver',
						array($venue->id),
						array('class'=> 'btn btn-success')) }}
					<br>
					{{ HTML::linkRoute('admin.venue.edit', 'Editar',
						array($venue->id),
						array('class'=> 'btn btn-info')) }}
					<br>
					{{ Form::open(array('route' => array('admin.venue.destroy', $venue->id), 'method'=> 'DELETE')) }}
						<button class="btn btn-danger" type="submit">Borrar</button>
					{{ Form::close()}}
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop