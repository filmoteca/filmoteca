
@section('breadcrumbs')
	<li>
		<a href="/pages/acervo/index">
			Acervo
		</a>
	</li>
	<li class="active">
		Restauración
	</li>
@stop


@section('sidebar')
	@include('elements.menus.acervo', array('selected' => 3))
@stop


@section('content')


	<h1>Restauración</h1>

	 <p>El buen cuidado y preservación de los materiales cinematográficos es una importante función que lleva a cabo la Filmoteca a través de la Subdirección de Rescate y Restauración, que tiene a su cargo todos los servicios relacionados con tal función.</p>

	<p>Los servicios que presta tanto al acervo como a solicitantes externos se basan en los trabajos que se llevan a cabo en los Departamentos de Talleres y de Laboratorio.</p>

	<p>Con ellos es que se revisan y restauran fotomecánicamente materiales antiguos, se realizan transferencias entre una gran diversidad de formatos –desde 9 mm hasta 70 mm- reparación de películas dañadas y se ofrece uno de los ya muy escasos servicios de revelado en blanco y negro que hay en México.</p>

	<p>La Filmoteca de la UNAM ha restaurado, entre otros materiales, los largometrajes de ficción dirigidos por Fernando de Fuentes: El compadre Mendoza (1934), Vámonos con Pancho Villa! (1936) así como la restauración digital (sonido) y fotoquímica (imagen) de El prisionero trece (1933), entre muchas otras más.</p>


	<h3>Material de “La Historia en la mirada”</h3>
		<img src="/imgs/historias-recuperadas/la-historia-en-la-mirada.jpg" class="img-responsive" 'La historia en la mirada'></a>
		<p>El patrimonio de imágenes en movimiento que preserva la Filmoteca de la UNAM, es de enorme riqueza no solamente universitaria sino nacional; poseemos, entre muchas otras, la más extensa colección de películas testimoniales de la Revolución Mexicana que nos dio pie para hacer la digitalización y restauración de apenas dos horas de las siete que albergamos, con las cuales hicimos el film <i>La Historia en la Mirada</i> que obtuvo el Ariel como el mejor documental de 2010 en la pasada premiación de la Academia de Ciencias y Artes Cinematográficas de México.</p>
		<a href="http://www.filmoteca.unam.mx/mirada/index.html" target="_blank" >Conoce más detalles de <i>La historia en la mirada</i></a>

	<h3>Redes</h3>
		<img src="/imgs/historias-recuperadas/redes.jpg" class="img-responsive" 'Redes'></a>
		<p>Conservamos el único material existente de la cinta hecha en 1934 y dirigida por Fred Zinnemann Redes, que fue aceptada por el Dr. Martin Scorsese del WCF, World Cinema Foundation, y ya restaurada digitalmente se está exhibiendo en diversas partes del mundo.</p>

		<p>Gestionó la restauración de la película Redes de Fred Zinnemann (1934) en la Cinemateca de Bolonia, Italia, gracias al apoyo de la World Cinema Foundation dirigida por Martin Scorsese. Este filme fue exhibido en el Festival de Cannes</p>

	<h3>Los olvidados</h3>
		<img src="/imgs/historias-recuperadas/los-olvidados.jpg" class="img-responsive" 'Los olvidados'></a>
		<p>También conservamos el negativo original del filme dirigido por Luis Buñuel Los olvidados e hicimos la propuesta de registro en el programa Memoria del Mundo de la UNESCO, ahora su fama se ha expandido por diversas partes del mundo.</p>


		
@stop
