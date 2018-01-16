@section('content')

	    <div class="btn-group">
          <ul class="programming-menu">
			<li>
				{{ HTML::link('/admin/exhibition/app#/exhibitions', 'Ver toda la programación') }}
			</li>
			<li>
				{{ HTML::link('/admin/exhibition/app#/exhibitions/create', 'Agregar exhibiciones') }}
			</li>
			<li>
				{{ HTML::link('/admin/exhibition/app#/films', 'Ver todas las películas') }}
			</li>
			<li>
				{{ HTML::link('/admin/exhibition/app#/films/create', 'Agregar película') }}
			</li>
			<li>
				{{ HTML::linkRoute('admin.auditorium.index', 'Ver todas las salas') }}
			</li>
			<li>
				{{ HTML::linkRoute('admin.auditorium.create', 'Agregar salas') }}
			</li>
            <li>
                {{ HTML::link('/admin/exhibition/app#/iconographics', 'Iconos') }}
            </li>
          </ul>
        </div>
<h2>Lista de Salas</h2>

{{ $resources->links() }}

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Dirección</th>
			<th>Teléfono</th>
			<th>Horario</th>
			<th>Costo general</th>
			<th>Costo especia</th>
			<th>Sede</th>
			<th>Mapa</th>
			<th>Portada</th>
			<th>Acciones</th>
		</tr>
	</thead>
	
	<tbody>
		@foreach($resources as $auditorium )
			<tr>
				<td>{{ $auditorium->id }}</td>
				<td>{{ $auditorium->name }}</td>
				<td>{{ $auditorium->address }}</td>
				<td>{{ $auditorium->telephone }}</td>
				<td>{{ $auditorium->schedule }}</td>
				<td>{{ $auditorium->general_cost }}</td>
				<td>{{ $auditorium->special_cost }}</td>
				@if( isset( $auditorium->venue->name ))
					<td>{{ $auditorium->venue->name }}</td>
				@else
					<td></td>
				@endif
				<td>
					<a href="{{ $auditorium->map }}">Link</a>
				</td>
				<td><img src="{{ $auditorium->image->url('thumbnail') }}" alt="{{ $auditorium->title }}" class="image thumbnail"></td>
				<td>
					{{ HTML::linkRoute('admin.auditorium.show', 'Ver',
						array($auditorium->id),
						array('class'=> 'btn btn-success')) }}
					<br>
					{{ HTML::linkRoute('admin.auditorium.edit', 'Editar',
						array($auditorium->id),
						array('class'=> 'btn btn-info')) }}
					<br>
					{{ Form::open(array('route' => array('admin.auditorium.destroy', $auditorium->id), 'method'=> 'DELETE')) }}
						<button class="btn btn-danger" type="submit">Borrar</button>
					{{ Form::close()}}
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop