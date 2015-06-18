@section('breadcrumbs')
	<li>
		<a href="/pages/concursos/jose-rovirosa">
			Concursos
		</a>
	</li>
	<li class="active">
		Convocatorias
	</li>
@stop

@section('sidebar')
	@include('elements.menus.concursos', array('selected' => 3))
@stop

@section('content')

<h1>Concurso Corto Móvil 2014</h1>

	<p>PREMIO AL MEJOR CORTOMETRAJE REALIZADO CON DISPOSITIVOS MÓVILES</p>
	<p>Consulta aquí las bases y ¡participa!</p>
	<img src="/imgs/convocatorias/convocatoriacortomovil2014.jpg" aling="left">
		
		<p></p>
		<p>Descarga el <a href="http://filmoteca.dev/pdf/convocatorias/registro14-corto-movil.pdf" target="_blank">Formulario de inscripción</a>
		y el <a href="http://www.filmoteca.dev/pdf/convocatorias/autorizacion-corto-movil.pdf" target="_blank">Documento de conformidad.</a></p>

@stop