@section('breadcrumbs')
	<li>
		<a href="/pages/acervo/index">
			Acervo
		</a>
	</li>
	<li class="active">
		Acervo fílmico
	</li>
@stop


@section('sidebar')
	@include('elements.menus.acervo', array('selected' => 0))
@stop


@section('content')

	<div class="img-servicios">
		<img src="/imgs/acervo/acervo-filmico.jpg" aling="left" class="img-responsive" 'Acervo fílmico'>
	</div>

	<h1>Acervo fílmico</h1>


	<p>Hace cincuenta años, la visión de un universitario amante del cine dio origen a la Filmoteca de la UNAM, hoy reconocida como un archivo cinematográfico imprescindible en nuestro país y uno de los más importantes en América Latina. El hecho de que hoy cuente con este reconocimiento es sin duda el efecto quizá no previsto, pero sí finalmente producido, por esta visión de <b>Manuel González Casanova</b>.</p>

	<p>Lo que comenzó siendo una discreta oficina donde se programaban funciones de cine y se facilitaban algunas pocas copias en formato de 16mm a los cineclubes que empezaban a surgir por los cuatro puntos cardinales de la geografía universitaria, se transformó con el tiempo en una institución donde no sólo se rescata, preserva y restaura el patrimonio fílmico de nuestro país, sino también en una entidad que lo difunde a escala nacional e internacional, y que también apoya su realización.</p>



@stop
