@section('content')

<h2>Lista de Catalogos</h2>

{{ $resources->links() }}

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Link</th>
			<th>Fecha de creación</th>
		</tr>
	</thead>
	
	<tbody>
		@foreach($resources as $catalog )
			<tr>
				<td>{{ $catalog->id }}</td>
				<td><a href="{{ $catalog->pdf->url() }}">Link</a></td>
				<td>{{ $catalog->created_at }}</td>
				<td>
					{{ HTML::linkRoute('admin.catalog.show', 'Ver',
						array($catalog->id),
						array('class'=> 'btn btn-success')) }}
					<br>
					{{ Form::open(array('route' => array('admin.catalog.destroy', $catalog->id), 'method'=> 'DELETE')) }}
						<button class="btn btn-danger" type="submit">Borrar</button>
					{{ Form::close()}}
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop