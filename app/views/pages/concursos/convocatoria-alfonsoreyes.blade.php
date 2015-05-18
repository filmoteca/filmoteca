@section('breadcrumbs')
	<li>
		<a href="/pages/concursos/index">
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

<h1>5º Concurso de crítica cinematográfica <em>Alfonso Reyes "Fósforo"</em></h1>

	<p>Consulta aquí las bases y ¡participa!</p>
	<img src="/imgs/convocatorias/convocatoriaFosforo-2015w.jpg" class="img-responsive" aling="left">
	<br>	
	<p>Descarga el pdf de la <a href="http://filmoteca.dev/pdf/convocatorias/convocatoriaFosforo-2015.pdf" target="_blank">Convocatoria</a>

@stop