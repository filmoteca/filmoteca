@section('breadcrumbs')
<li>
	<a href="/pages/extension-academica/index">
		Extensión Académica
	</a>
</li>
<li class="active">
	Convocatoria Programa de Becarios
</li>
@stop


@section('sidebar')
	@include('elements.menus.extension-academica', array('selected' => 2))
@stop



@section('content')

	<h1>Programa de Becarios</h1>
	<h2>Convocatoria</h2>

	<!-- <p>La Convocatoria se ha cerrado.</p> -->
	<p>Consulta aquí las bases y ¡participa!</p>
	<img src="/imgs/becarios/convocatoriaBecarios2015.jpg" class="img-responsive" aling="left">
		<br>
	

@stop