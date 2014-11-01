@extends('layouts.admin')
@section('content')

<h2>Lista de Noticias</h2>

{{ $registers->links() }}

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th colspan="3"> Medio </th>
			<th colspan="4"> Reportero </th>
			<th colspan="3"> Editor </th>
			<th></th>
		</tr>
		<tr>
			<th>Tipo</th>
			<th>Nombre</th>
			<th>Dirección</th>
			<th>Nombre</th>
			<th>Teléfono</th>
			<th>Celular</th>
			<th>E-mail</th>
			<th>Nombre</th>
			<th>Teléfono</th>
			<th>E-mail</th>
			<th>Acciones</th>
		</tr>
	</thead>
	
	<tbody>
		@foreach($registers as $register )
			<tr>
				<td>{{ $register->the_media_id }}</td>
				<td>{{ $register->the_media_name }}</td>
				<td>{{ $register->the_media_address }}</td>
				<td>{{ $register->reporter_name }}</td>
				<td>{{ $register->reporter_telephone }}</td>
				<td>{{ $register->reporter_mobile_phone }}</td>
				<td>{{ $register->reporter_email }}</td>
				<td>{{ $register->editor_name }}</td>
				<td>{{ $register->editor_telephone }}</td>
				<td>{{ $register->editor_email }}</td>
				<td>{{ Form::open(array('route' => array('admin.press_register.destroy', $register->id), 'method'=> 'DELETE')) }}
						<button class="btn btn-danger" type="submit">Borrar</button>
						{{ Form::close()}}</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop