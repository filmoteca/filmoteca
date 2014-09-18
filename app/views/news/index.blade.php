@section('content')

<h2>Lista de Noticias</h2>

{{ $resources->links() }}

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Título</th>
			<th>Cuerpo</th>
			<th>Icono</th>
			<th>Acciones</th>
		</tr>
	</thead>
	
	<tbody>
		@foreach($resources as $news )
			<tr>
				<td>{{ $news->id }}</td>
				<td>{{ $news->title }}</td>
				<td>{{ $news->body }}</td>

				<td><img src="{{ $news->image->url('thumbnail') }}" alt="{{ $news->title }}" class="image thumbnail"></td>
				<td>
					{{ HTML::linkRoute('admin.news.show', 'Ver',
						array($news->id),
						array('class'=> 'btn btn-success')) }}
					<br>
					{{ HTML::linkRoute('admin.news.edit', 'Editar',
						array($news->id),
						array('class'=> 'btn btn-info')) }}
					<br>
					{{ Form::open(array('route' => array('admin.news.destroy', $news->id), 'method'=> 'DELETE')) }}
						<button class="btn btn-danger" type="submit">Borrar</button>
					{{ Form::close()}}
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop