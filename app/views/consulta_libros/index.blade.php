@section('content')

<h2>Lista de libros</h2>

{{ $resources->links() }}

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Título</th>
			<th>Año</th>
			<th>Páginas</th>
			<th>Sinopsis</th>
			<th>Indice</th>
			<th>Portada</th>
			<th>Acciones</th>
		</tr>
	</thead>

	<tbody>
		@foreach($resources as $consulta_libro )
			<tr>
				<td>{{ $consulta_libro->id }}</td>
				<td>{{ $consulta_libro->title }}</td>
				<td>{{ $consulta_libro->pages }}</td>
				<td>{{ $consulta_libro->year}}</td>
				<td>{{ str_limit($consulta_libro->sinopsis, 100, '...')}}</td>
				<td>{{ str_limit($consulta_libro->indice, 100, '...')}}</td>

				<td><img src="{{ $consulta_libro->image->url('thumbnail') }}" alt="{{ $consulta_libro->title }}" class="image thumbnail"></td>
				<td>
					{{ HTML::linkRoute('admin.consultaLibro.show', 'Ver',
						array($consulta_libro->id),
						array('class'=> 'btn btn-success')) }}
					<br>
					{{ HTML::linkRoute('admin.consultaLibro.edit', 'Editar',
						array($consulta_libro->id),
						array('class'=> 'btn btn-info')) }}
					<br>
					{{ Form::open(array('route' => array('admin.consultaLibro.destroy', $consulta_libro->id), 'method'=> 'DELETE')) }}
						<button class="btn btn-danger" type="submit">Borrar</button>
					{{ Form::close()}}
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop
