@section('breadcrumbs')
<li>
	<a href="/pages/servicios/index">
		Servicios
	</a>
</li>
<li class="active">
	Producción
</li>
@stop





@section('content')

<div class="sidebar">
	@include('elements.menus.servicios', array('selected' => 7))
</div>

<div class="content">
	<h1>Departamento de Producción* </h1>

	<p>La principal tarea del Departamento de Producción es la realización de documentales y el apoyo a proyectos independientes de directores con ideas innovadoras. El apoyo consiste en facilitar el equipo técnico de grabación para la realización y edición de las producciones.</p>

	<p>El apoyo del departamento puede ser solicitado por productores y directores independientes, egresados del CUEC, CCC, instituciones de educación cinematográfica y directores que cuentan con una trayectoria que respalde su trabajo y compromiso con el crecimiento del cine. </p>

	<p>Responsable: Jesús Brito Nájera</p> 
	<p> Tel: 56 22 95 87 </p>
	<p>Correo electrónico: <a href="mailto:jesusbn@unam.mx">jesusbn@unam.mx</a></p>

	<p>*Para tener acceso a este departamentos consultar 
	{{HTML::link(
		'/pages/servicios/lineamientos_generales_para_acceder_al_material',
		'Lineamientos generales para acceso al material')}}</p>
</div>

@stop