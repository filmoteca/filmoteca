@section('content')

<h2>Cronología</h2>

{{ $resources->links() }}

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Año</th>
			<th>Descripción</th>
		</tr>
	</thead>
	
	<tbody>
		@foreach($resources as $chronology )
			<tr>
				<td>{{ $chronology->id }}</td>
				<td>{{ $chronology->year }}</td>
				<td>{{ $chronology->description }}</td>
				<td>
					{{ HTML::linkRoute('admin.chronology.show', 'Ver',
						array($chronology->id),
						array('class'=> 'btn btn-success')) }}
					<br>
					{{ HTML::linkRoute('admin.chronology.edit', 'Editar',
						array($chronology->id),
						array('class'=> 'btn btn-info')) }}
					<br>
					{{ Form::open(array('route' => array('admin.chronology.destroy', $chronology->id), 'method'=> 'DELETE')) }}
						<button class="btn btn-danger" type="submit">Borrar</button>
					{{ Form::close()}}
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop