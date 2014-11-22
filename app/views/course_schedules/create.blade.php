@section('content')

{{ Form::open( 
	[
		'route' => 'admin.courseSchedule.store', 
		'files' => true,
		'method'=> 'POST',
		'class' => 'form-horizontal panel panel-default'
	])}}

	<div class="panel-heading">
		<h2>Agregar horario</h2>
	</div>
	
	<div class="panel-body">

	{{ Form::formGroup('course','course_id','Curso', 'courseSchedule_form') }}

	{{ Form::formGroup('professor','professor_id','Profesor', 'courseSchedule_form') }}

	{{ Form::formGroup('venue','venue_id','Sede', 'courseSchedule_form') }}

	{{ Form::formGroup('text','total_hours','Total de horas', 'courseSchedule_form') }}

	{{ Form::formGroup('text','schedule','Horario', 'courseSchedule_form') }}

	{{ Form::formGroup('date','start_date','Fecha de inicio', 'courseSchedule_form') }}

	{{ Form::formGroup('date','end_date','Fecha de termino', 'courseSchedule_form') }}

	{{ Form::formGroup('text','general_price','Precio general', 'courseSchedule_form') }}

	{{ Form::formGroup('text','unam_member_price','Precio comunidad UNAM', 'courseSchedule_form') }}


	</div>

	<div class="panel-footer">
		<button class="btn btn-success pull-right" type="submit">Agregar</button>
		<div class="clearfix"></div>
	</div>

{{ Form::close() }}

@stop