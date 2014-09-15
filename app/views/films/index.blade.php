@section('content')

{{ $resources->links() }}

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Título</th>
			<th>Director</th>
			<th>Año</th>
			<th>Actions</th>
		</tr>
	</thead>
	
	<tbody>
		@foreach($resources as $film )
			<tr>
				<td>{{ $film->id }}</td>
				<td>{{ $film->title }}</td>
				<td>{{ $film->director }}</td>
				<td>{{ $film->year }}</td>
				<td>

					{{ Form::open(array('route' => array('admin.film.destroy', $film->id), 'method'=> 'DELETE')) }}
						<button class="btn btn-danger" type="submit">Borrar</button>
					{{ Form::close()}}

					{{ HTML::linkRoute('admin.film.edit', 'Editar',
						array($film->id),
						array('class'=> 'btn btn-info')) }}

					{{ HTML::linkRoute('admin.film.show', 'Ver',
						array($film->id),
						array('class'=> 'btn btn-success')) }}
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop