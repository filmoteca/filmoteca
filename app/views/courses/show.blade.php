@section('content')

<h2>Detalles de cursos</h2>

<div class="text-right">
{{ Form::open(array('route' => array('admin.course.destroy', $resource->id), 'method'=> 'DELETE')) }}
				<button class="btn btn-danger navbar-btn" type="submit">Borrar</button>

{{ HTML::linkRoute('admin.course.edit', 'Editar',
	array($resource->id),
	array('class'=> 'btn btn-info navbar-btn')) }}

{{ Form::close()}}
</div>

<table class="table bordered condensed">
	<thead>
		<tr>
			<th>Campo</th>
			<th>Valor</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>ID</th>
			<td>{{$resource->id }}</td>
		</tr>
		<tr>
			<th>Nombre</th>
			<td>{{$resource->name }}</td>
		</tr>
	</tbody>
</table>

<div class="text-right">
{{ Form::open(array('route' => array('admin.course.destroy', $resource->id), 'method'=> 'DELETE')) }}
				<button class="btn btn-danger navbar-btn" type="submit">Borrar</button>

{{ HTML::linkRoute('admin.course.edit', 'Editar',
	array($resource->id),
	array('class'=> 'btn btn-info navbar-btn')) }}

{{ Form::close()}}
</div>

@stop