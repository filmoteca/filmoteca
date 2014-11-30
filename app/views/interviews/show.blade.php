@section('content')

<h2>Detalles de entrevista</h2>

<div class="text-right">
{{ Form::open(array('route' => array('admin.interview.destroy', $resource->id), 'method'=> 'DELETE')) }}
				<button class="btn btn-danger navbar-btn" type="submit">Borrar</button>

{{ HTML::linkRoute('admin.interview.edit', 'Editar',
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
			<td>{{$resource->title }}</td>
		</tr>
		<tr>
			<th>Contenido</th>
			<td>{{$resource->body }}</td>
		</tr>
		<tr>
			<th>Fotografía</th>
			<td>
				<a href="{{$resource->image->url()}}" target="_blank">
					<img src="{{$resource->image->url('thumbnail') }}">
				</a>
			</td>
		</tr>
		<tr>
			<th>Audio</th>
			<td>
				<a href="{{$resource->audio->url() }}" target="_blank">
				{{$resource->audio->url() }}
				</a>
			</td>
		</tr>
		<tr>
			<th>Video</th>
			<td>
				<a href="{{$resource->video->url() }}" target="_blank">
				{{$resource->video->url() }}
				</a>
			</td>
		</tr>

	</tbody>
</table>

<div class="text-right">
{{ Form::open(array('route' => array('admin.interview.destroy', $resource->id), 'method'=> 'DELETE')) }}
				<button class="btn btn-danger navbar-btn" type="submit">Borrar</button>

{{ HTML::linkRoute('admin.interview.edit', 'Editar',
	array($resource->id),
	array('class'=> 'btn btn-info navbar-btn')) }}

{{ Form::close()}}
</div>

@stop