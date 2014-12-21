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

@section('sidebar')
	@include('elements.menus.servicios', array('selected' => 8))
@stop



@section('content')

	<h1>Producción</h1>

	<p>Esta área tiene la tarea de realizar y editar documentales y películas mexicanas que forman parte de nuestro acervo, así como dar apoyo a directores y productores independientes, egresados de instituciones de educación cinematográfica que cuentan con una trayectoria que respalde su trabajo y compromiso con el crecimiento del cine. Este apoyo consiste en facilitar  equipo técnico de grabación para la realización y edición de las producciones.</p>

	<p>Contacto: Jesús Brito Nájera</p> 
	<p> Teléfono: 56 22 95 87 </p>
	<p>Correo electrónico: <a href="mailto:jesusbn@unam.mx">jesusbn@unam.mx</a></p>

	<p>Si quieres hacer alguna solicitud, consulta los  
	{{ HTML::link(
		'/pages/servicios/lineamentos-generales-para-solicitar-un-servicio',
		'Lineamientos para acceso al material.' )                            
		}}</p>

@stop