@section('content')

<h2>Detalles de asignatura</h2>

<div class="text-right">
{{ Form::open(array('route' => array('admin.subject.destroy', $resource->id), 'method'=> 'DELETE')) }}
				<button class="btn btn-danger navbar-btn" type="submit">Borrar</button>

{{ HTML::linkRoute('admin.subject.edit', 'Editar',
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
{{ Form::open(array('route' => array('admin.subject.destroy', $resource->id), 'method'=> 'DELETE')) }}
				<button class="btn btn-danger navbar-btn" type="submit">Borrar</button>

{{ HTML::linkRoute('admin.subject.edit', 'Editar',
	array($resource->id),
	array('class'=> 'btn btn-info navbar-btn')) }}

{{ Form::close()}}
</div>

<p>Image (thumbnail): <img src="{{ $resource->image->url('thumbnail')}}"></p>
<p>Image (mediana): <img src="{{ $resource->image->url('medium')}}"></p>
<p>Image (original): <img src="{{ $resource->image->url()}}"></p>

@stop