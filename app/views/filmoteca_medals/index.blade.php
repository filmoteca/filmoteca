@section('content')

<h2>Lista de Ganadores</h2>

{{ $resources->links() }}

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Fecha en la que se le otorgó</th>
			<th>Biografía</th>
			<th>Fotografía</th>
			<th>Acciones</th>
		</tr>
	</thead>
	
	<tbody>
		@foreach($resources as $filmoteca_medal )
			<tr>
				<td>{{ $filmoteca_medal->id }}</td>
				<td>{{ $filmoteca_medal->name }}</td>
				<td>{{ $filmoteca_medal->award_date }}</td>
				<td>{{ str_limit($filmoteca_medal->biography, 100, '...')}}</td>

				<td><img src="{{ $filmoteca_medal->image->url('thumbnail') }}" alt="{{ $filmoteca_medal->title }}" class="image thumbnail"></td>
				<td>
					{{ HTML::linkRoute('admin.filmotecaMedal.show', 'Ver',
						array($filmoteca_medal->id),
						array('class'=> 'btn btn-success')) }}
					<br>
					{{ HTML::linkRoute('admin.filmotecaMedal.edit', 'Editar',
						array($filmoteca_medal->id),
						array('class'=> 'btn btn-info')) }}
					<br>
					{{ Form::open(array('route' => array('admin.filmotecaMedal.destroy', $filmoteca_medal->id), 'method'=> 'DELETE')) }}
						<button class="btn btn-danger" type="submit">Borrar</button>
					{{ Form::close()}}
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop