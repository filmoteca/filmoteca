
@section('breadcrumbs')
	<li>
		<a href="/pages/acervo/index">
			Acervo
		</a>
	</li>
	<li class="active">
		Cine en línea
	</li>
@stop


@section('sidebar')
	@include('elements.menus.acervo', array('selected' => 5))
@stop


@section('content')

<div class="img-servicios">
		<img src="/imgs/cine-en-linea/cine-en-linea.jpg" aling="left" class="img-responsive" 'Aparatos antiguos'>
	</div>

	<h1>Cine en línea</h1>
		
		<p>La Filmoteca de la UNAM, con la idea de hacer más accesible su acervo cinematográfico a toda la comunidad y público en general, ha digitalizado material fílmico de gran valor, correspondiente al período del cine silente mexicano y al ciclo que abarca la historia del país, de 1900 a 1990 y lo exhibe a través de <a href="http://www.filmoteca.unam.mx/cinelinea/" target="_blank"><class="text-primary">Cine en línea</a>.</p>

		<p>El material está accesible para que lo veas en los diferentes reproductores de video, dispositivos móviles y navegadores web.</p>

		<p>Este resultado digital se debe a la labor de la Coordinación de Nuevas Tecnologías de la DGAC, y en buena medida a la valiosa colaboración de estudiantes de Servicio Social y del Programa de Becarios, además del apoyo de la Dirección General de Cómputo y de Tecnologías de Información y Comunicación de la UNAM.</p>

		<div class="col-xs-12 col-sm-12">
			 <h3 class="text-uppercase">Catálogo cine en línea</h3>
          <div class="row">

	            <div class="col-6 col-sm-6 col-lg-6">
	              <h4>Cine silente</h4>
	              <img src="/imgs/cine-en-linea/cine-silente.jpg" class="img-responsive" 'Cine silente'></a>
	              <p>Largometrajes de ficción silentes mexicanos que muestran temas que aún atañen a la realidad mexicana.
	              </p>
	              <p><a class="btn btn-default" href="http://www.filmoteca.unam.mx/cinelinea/html/silente.html" target="_blank" role="button">Entrar »</a></p>
	            </div><!--/span-->

	            <div class="col-6 col-sm-6 col-lg-6">
	              <h4>México Naturalmente</h4>
	              <img src="/imgs/cine-en-linea/mexico-naturalmente.jpg" class="img-responsive" 'México naturalmente'></a>
	              <p>Serie documental de cinco programas en torno a algunas áreas naturales de nuestro país.</p><br>
	              <p><a class="btn btn-default" href="http://www.filmoteca.unam.mx/cinelinea/html/naturalmente.html" target="_blank" role="button">Entrar »</a></p>
	            </div><!--/span-->

	            <div class="col-6 col-sm-6 col-lg-6">
	              <h4>18 lustros y una década</h4>
	              <img src="/imgs/cine-en-linea/lustros.jpg" class="img-responsive" '18 Lustros y una década'></a>
					<p>Serie producida por la UNAM, que muestra el desarrollo económico, político, social y cultural de México.
				       </p>
	              <p><a class="btn btn-default" href="http://www.filmoteca.unam.mx/cinelinea/html/lustros.html" target="_blank" role="button">Entrar »</a></p>
	            </div><!--/span-->

	            <div class="col-6 col-sm-6 col-lg-6">
	              <h4>Pintura mexicana</h4>
	              <img src="/imgs/cine-en-linea/pintura-mexicana.jpg" class="img-responsive" 'Pintura mexicana'></a>
	              <p>Muestra de películas sobre arte, producidas por la Filmoteca de la UNAM</p><br>
	              <p><a class="btn btn-default" href="http://www.filmoteca.unam.mx/cinelinea/html/pintura.html" target="_blank" role="button">Entrar »</a></p>
	            </div><!--/span-->

	            <div class="col-6 col-sm-6 col-lg-6">
	              <h4>Miradas al cine mexicano</h4>
	              <img src="/imgs/cine-en-linea/miradas-cine-mexicano.jpg" class="img-responsive" 'Miradas al cine mexicano'></a>
	              <p>Obras cinematográficas de directores y actores del cine mexicano.</p>
	              <p><a class="btn btn-default" href="http://www.filmoteca.unam.mx/cinelinea/html/miradas.html" target="_blank" role="button">Entrar »</a></p>
	            </div><!--/span-->

	            <div class="col-6 col-sm-6 col-lg-6">
	              <h4>Tauromaquia</h4>
	              <img src="/imgs/cine-en-linea/tauromaquia.jpg" class="img-responsive" 'Tauromaquia'></a>
	              <p>La Filmoteca muestra materiales fílmicos sobre la tauromquia, pertenecientes a su archivo</i>.</p>
	              <p><a class="btn btn-default" href="http://www.filmoteca.unam.mx/cinelinea/html/tauromaquia.html" target="_blank" role="button">Entrar »</a></p>
	            </div><!--/span-->

	            <div class="col-6 col-sm-6 col-lg-6">
	              <h4>Leer cine</h4>
	              <img src="/imgs/cine-en-linea/leer-cine.jpg" class="img-responsive" 'Leer cine'></a>
	              <p>Trabajo audiovisual realizado en el programa <i>Leer cine</i>, por estudiantes del CCH Azcapotzalco.</p>
	              <p><a class="btn btn-default" href="http://www.filmoteca.unam.mx/cinelinea/html/leer.html" target="_blank" role="button">Entrar »</a></p>
	            </div><!--/span-->

          </div><!--/row-->

        </div><!--/span-->

		
@stop