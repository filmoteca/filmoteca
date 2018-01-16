@section('content')

{{ Form::open( 
	[
		'route' => 'admin.auditorium.store', 
		'files' => true,
		'method'=> 'POST',
		'class' => 'form-horizontal panel panel-default'
	])}}
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
	<div class="panel-heading">
		<h2>Agregar sala</h2>
	</div>
	
	<div class="panel-body">

	{{ Form::formGroup('text','name','Nombre', 'auditorium_form') }}

	{{ Form::formGroup('text','address','Dirección', 'auditorium_form') }}

	{{ Form::formGroup('text','telephone','Teléfono', 'auditorium_form') }}

	{{ Form::formGroup('text','schedule','Horario', 'auditorium_form') }}

	{{ Form::formGroup('text','general_cost','Costo general', 'auditorium_form') }}

	{{ Form::formGroup('text','special_cost','Costo especial', 'auditorium_form') }}

	{{ Form::formGroup('auditorium', 'venue_id', 'Sede', 'auditorium_form')}}

	{{ Form::formGroup('textarea','map','Mapa', 'auditorium_form', ['class' => 'no-ckeditor']) }}

	{{ Form::formGroup('file','image', 'Portada', 'auditorium_form')}}

	</div>

	<div class="panel-footer">
		<button class="btn btn-success pull-right" type="submit">Agregar</button>
		<div class="clearfix"></div>
	</div>

{{ Form::close() }}

@stop