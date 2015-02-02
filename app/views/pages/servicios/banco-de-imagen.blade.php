@section('breadcrumbs')
<li>
	<a href="/pages/servicios/index">
		Servicios
	</a>
</li>
<li class="active">
	Banco de imagen
</li>
@stop

@section('sidebar')
	@include('elements.menus.servicios', array('selected' => 0))
@stop



@section('content')

	<div class="img-servicios">
		<img src="/imgs/servicios/banco-imagen.jpg" aling="left">
	</div>
	<h1>Banco de imagen</h1>

	<p>La Filmoteca de la UNAM posee uno de los acervos cinematográficos más importantes en América Latina, el cual está abierto para su consulta, visionado y utilización en proyectos audiovisuales, tanto de perfil histórico como de ficción.
	</p>

	<p>A través del Banco de Imagen, se puede acceder a más de 12000 registros de material con una amplia temática, donde es posible encontrar imágenes desde 1896 hasta finales del siglo XX que muestran algunos hechos y personajes de la amplia gama de la iconografía social, política, cultural e histórica de México.</p> 

	<p>El Banco de imagen es una ventana al acervo de la Filmoteca para que los realizadores, productores, investigadores e interesados en general, puedan acceder a este diverso y nutrido stock para su reempleo en diversos proyectos que requieren la utilización de la imagen en movimiento.</p>
	

	<p>Si quieres hacer alguna solicitud, consulta los  
	{{ HTML::link(
		'/pages/servicios/requisitos-para-solicitar-un-servicio',
		'Requisitos para solicitar un servicio.' )                            
		}}</p>

	<p>Contacto: Nahún Calleros</p> 
	<p>Teléfono: 5622 9630 </p>
	<p>Correo electrónico: <a href="mailto:carriles@unam.mx">carriles@unam.mx</a></p>

	

@stop