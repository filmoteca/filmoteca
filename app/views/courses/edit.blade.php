@section('content')

{{ Form::model( 
	$resource,
	[
		'route' => ['admin.course.update', $resource->id], 
		'files' => true,
		'method'=> 'PUT',
		'class' => 'form-horizontal panel panel-default'
	])}}

	<div class="panel-heading">
		<h2>Editar curso</h2>
	</div>
	
	<div class="panel-body">


	{{ Form::formGroup('subject','subject_id','Asignatura', 'course_schedule_form') }}

	{{ Form::formGroup('professor','professor_id','Profesor', 'course_schedule_form') }}

	{{ Form::formGroup('venue','venue_id','Sede', 'course_schedule_form') }}

	{{ Form::formGroup('text','total_hours','Total de horas', 'course_schedule_form') }}

	{{ Form::formGroup('text','schedule','Horario', 'course_schedule_form') }}

	{{ Form::formGroup('date','start_date','Fecha de inicio', 'course_schedule_form') }}

	{{ Form::formGroup('date','end_date','Fecha de termino', 'course_schedule_form') }}

	{{ Form::formGroup('text','general_price','Precio general', 'course_schedule_form') }}

	{{ Form::formGroup('text','unam_member_price','Precio comunidad UNAM', 'course_schedule_form') }}
	
	</div>

	<div class="panel-footer">
		<button class="btn btn-success pull-right" type="submit">Actualizar</button>
		<div class="clearfix"></div>
	</div>

{{ Form::close() }}

@stop