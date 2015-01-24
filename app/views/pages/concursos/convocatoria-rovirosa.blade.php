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

	<h1>Premio José Rovirosa</h1>
        <p>AL MEJOR DOCUMENTAL MEXICANO Y AL MEJOR DOCUMENTAL ESTUDIANTIL</p>
		<br>
		
		<p>Por el momento la Convocatoria está cerrada</p>

<!-- 	<img src="/imgs/convocatorias/.jpg" class="img-responsive" aling="left"> -->
		<br>

@stop