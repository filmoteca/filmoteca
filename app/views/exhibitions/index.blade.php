@section('breadcrumbs')
	<li class="active">Lista de exhibiciones</li>
@stop

@section('content')

<h2>Lista de exhibiciones</h2>

{{ $resources->links() }}

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Título de la película</th>
			<th>Director</th>
			<th>Horarios</th>
			<th>Portada</th>
			<th>Acciones</th>
		</tr>
	</thead>
	
	<tbody>
		@foreach($resources as $exhibition )
			<tr>
				<td>{{ $exhibition->id }}</td>
				<td>{{ $exhibition->exhibition_film->film->title }}</td>
				<td>{{ $exhibition->exhibition_film->film->director }}</td>
				
				<td>
				@foreach( $exhibition->auditoriums as $auditorium)
					<div class="panel panel-default">
						<div class="panel-heading">{{ $auditorium->name }}</div>
						<div class="panel-body">
							<ul class="list-group">						
							@foreach( $exhibition->schedulesByAuditorium($auditorium->id) as $schedule)
								<li class="list-group-item">{{ $schedule->entry }}</li>
							@endforeach
							</ul>
						</div>
					</div>
				@endforeach
				</td>

				<td><img src="{{ $exhibition->exhibition_film->film->image->url('thumbnail') }}" alt="{{ $exhibition->exhibition_film->film->title }}" class="image thumbnail"></td>
				<td>
					{{ HTML::linkRoute('admin.exhibition.show', 'Ver',
						array($exhibition->id),
						array('class'=> 'btn btn-success')) }}
					<br>
					{{ Form::open(array('route' => array('admin.exhibition.destroy', $exhibition->id), 'method'=> 'DELETE')) }}
						<button class="btn btn-danger" type="submit">Borrar</button>
					{{ Form::close()}}
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop