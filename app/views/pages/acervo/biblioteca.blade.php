@section('breadcrumbs')
	<li>
		<a href="/pages/acervo/index">
			Acervo
		</a>
	</li>
	<li class="active">
		Biblioteca
	</li>
@stop


@section('sidebar')
	@include('elements.menus.acervo', array('selected' => 2))
@stop


@section('content')

	<div class="img-servicios">
		<img src="/imgs/quienes-somos/libro-filmoteca50.jpg" aling="left">
	</div>

	<h1>Biblioteca</h1>


	<p>Hace cincuenta años, la visión de un universitario amante del cine dio origen a la Filmoteca de la UNAM, hoy reconocida como un archivo cinematográfico imprescindible en nuestro país y uno de los más importantes en América Latina. El hecho de que hoy cuente con este reconocimiento es sin duda el efecto quizá no previsto, pero sí finalmente producido, por esta visión de <b>Manuel González Casanova</b>.</p>

	<p>Lo que comenzó siendo una discreta oficina donde se programaban funciones de cine y se facilitaban algunas pocas copias en formato de 16mm a los cineclubes que empezaban a surgir por los cuatro puntos cardinales de la geografía universitaria, se transformó con el tiempo en una institución donde no sólo se rescata, preserva y restaura el patrimonio fílmico de nuestro país, sino también en una entidad que lo difunde a escala nacional e internacional, y que también apoya su realización.</p>

	<p>Un apreciado amigo de la Filmoteca y reconocido escritor de temas cinematográficos, <b>Rafael Aviña</b>, se ha hecho cargo de contar la historia de estas cinco décadas del cine en la Universidad. Para ello ha indagado hasta encontrar lo que había que narrar acerca de sus orígenes en los años cincuenta, época en que los estudiantes de vocación cinéfila comienzan a acercar la cultura y el arte cinematográfico del mundo a la Universidad, una época y un ambiente que el autor retrata en el libro desde una perspectiva que todavía nos resulta muy familiar. Una vez reconocida esta semilla y sin descuidar en ningún momento la particular raigambre universitaria de la Filmoteca, Aviña se adentra en los pormenores de las actividades y circunstancias de este archivo fílmico, es decir, la conformación de los acervos, los elementos distintivos, los personajes, los hechos y fechas relevantes, todos debidamente cronologados. De manera especial se reconoce una muestra representativa de las riquezas que guardan sus bóvedas y colecciones, los tesoros y rescates memorables; así como comentarios, anécdotas, testimonios e incluso revelaciones que se han dado a lo largo de medio siglo de una actividad cada día más dinámica y enriquecedora para quienes la Universidad nos ha encomendado la misión de llevarla a cabo.</p>

	<p>Para nosotros es una feliz coincidencia que la Universidad Nacional celebre su centenario justo cuando su Filmoteca celebra la mitad de dicha cantidad de años de existencia. Sabernos parte de la historia de una institución imprescindible para un país que a su vez celebra doscientos años de vida independiente es, a la vez, un privilegio y un compromiso: el de continuar salvaguardando y difundiendo la memoria visual de dicha nación.</p>

	<p><b>Guadalupe Ferrer Andrade</b></p>
	<p>Directora General de Actividades Cinematográficas de la UNAM</p>
	<br>

		<div class="col-sm-4">
			
			<a href="http://issuu.com/libro_filmo/docs/filmotecaunam_libro50anos" target="_blank"><img src="/imgs/quienes-somos/libro-filmoteca-min.jpg">Lee la versión digital</a>
		</div>




@stop
