@section('content')

{{ Form::open( 
	[
		'route' => 'admin.student.store', 
		'files' => true,
		'method'=> 'POST',
		'class' => 'form-horizontal panel panel-default'
	])}}

	<div class="panel-heading">
		<h2>Agregar Noticia</h2>
	</div>
	
	<div class="panel-body">

	{{ Form::formGroup('text','name','Nombre', 'student_form') }}

	{{ Form::formGroup('text','last_name','Apellido paterno', 'student_form') }}

	{{ Form::formGroup('text','second_last_name','Apellido materno', 'student_form') }}

	{{ Form::formGroup('text','enrolment','Matricula', 'student_form') }}

	{{ Form::formGroup('text','telephone','Teléfono', 'student_form') }}

	{{ Form::formGroup('text','mobile','Celular', 'student_form') }}

	{{ Form::formGroup('text','email','Email', 'student_form') }}

	
	<div class="form-group">
		<label class="col-sm-2 control-label text-right" for="status">Perteneciente a la UNAM</label>{{ Form::checkbox('unam_member') }}
		</p>
	</div>	

	<div class="form-group">
		<label class="col-sm-2 control-label text-right" for="status">Estado en el sistema </label>
		<p>Activo {{ Form::radio('status','active', true)}} Inactivo {{ Form::radio('status', 'inactive') }}
		</p>
	</div>

	</div>

	<div class="panel-footer">
		<button class="btn btn-success pull-right" type="submit">Agregar</button>
		<div class="clearfix"></div>
	</div>

{{ Form::close() }}

@stop