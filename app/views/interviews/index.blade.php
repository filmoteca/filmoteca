@section('content')

<h2>Lista de entrevistas</h2>

{{ $resources->links() }}

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Título</th>
			<th>Link video</th>
			<th>Link audio</th>
			<th>Fotográfia</th>
			<th>Acciones</th>
		</tr>
	</thead>
	
	<tbody>
		@foreach($resources as $interview )
			<tr>
				<td>{{ $interview->id }}</td>
				<td>{{ $interview->title }}</td>

				@if( $interview->video->url() )
					<td><a href="{{ $interview->video->url() }}">Video</a></td>
				@else
					<td>Sin video</td>
				@endif
				
				@if( $interview->audio->url() )
					<td><a href="{{ $interview->audio->url() }}">Audio</a></td>
				@else
					<td>Sin audio</td>
				@endif

				<td><img src="{{ $interview->image->url('thumbnail') }}" alt="{{ $interview->title }}" class="image thumbnail"></td>

				<td>
					{{ HTML::linkRoute('admin.interview.show', 'Ver',
						array($interview->id),
						array('class'=> 'btn btn-success')) }}
					<br>
					{{ HTML::linkRoute('admin.interview.edit', 'Editar',
						array($interview->id),
						array('class'=> 'btn btn-info')) }}
					<br>
					{{ Form::open(array('route' => array('admin.interview.destroy', $interview->id), 'method'=> 'DELETE')) }}
						<button class="btn btn-danger" type="submit">Borrar</button>
					{{ Form::close()}}
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop