
@section('breadcrumbs')
	<li>
		<a href="/pages/acervo/index">
			Acervo
		</a>
	</li>
	<li class="active">
		Museo virtual de aparatos cinematográficos
	</li>
@stop


@section('sidebar')
	@include('elements.menus.acervo', array('selected' => 4))
@stop


@section('content')

<div class="img-servicios">
		<img src="/imgs/acervos/aparatos-antiguos.jpg" aling="left" class="img-responsive" 'Aparatos antiguos'>
	</div>

	<h1>Museo virtual de aparatos cinematográficos</h1>
		
		<p>La Filmoteca de la UNAM, uno de los archivos más importantes de América Latina, incluye entre sus actividades la conservación y recuperación de equipos y aparatos que muestran el devenir tecnológico de la cinematografía. Tiene bajo su resguardo una amplia colección de aparatos pre-cinematográficos y cinematográficos provenientes de diversas épocas, incluidos artefactos conocidos como juguetes ópticos, y el primer proyector profesional.</p>

 		<p>Esta colección podrás conocerla a través de nuestro museo virtual, en donde encontrarás los primeros dispositivos o artefactos que se utilizaron para generar imágenes en movimiento y parte de su evolución hacia los aparatos cinematográficos, información, fotografías, animaciones, videos e inclusive modelos tridimensionales interactivos y didácticos que te llevarán en un viaje por su evolución a través de la historia partiendo de antecedentes del cine que datan de mediados del siglo XIX.</p> 

		<p><a href="http://www.filmoteca.unam.mx/MUVAC" target="_blank">Te invitamos a visitarlo</a></p>

		
@stop