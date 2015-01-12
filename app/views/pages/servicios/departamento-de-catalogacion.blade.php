@section('breadcrumbs')
<li>
	<a href="/pages/servicios/index">
		Servicios
	</a>
</li>
<li class="active">
	Catalogación
</li>
@stop

@section('sidebar')
	@include('elements.menus.servicios', array('selected' => 2))
@stop



@section('content')

	<div class="img-servicios">
		<img src="/imgs/servicios/catalogacion.jpg" aling="left">
	</div>

	<h1>Catalogación</h1>

	<p>El departamento de Catalogación realiza la revisión, catalogación y registro del material cinematográfico del acervo de la Filmoteca de la UNAM y elabora fichas de contenido en las cuales se identifican personajes, épocas, sucesos, acontecimientos históricos, etcétera. </p> 

	<p>Gracias a la información que se recopila en este departamento es posible facilitar el acceso, de forma organizada, a los investigadores, realizadores e interesados en las colecciones y materiales de los que dispone la Filmoteca. </p>

	<p>Si estás interesado en realizar alguna consulta o asesoría, consulta los   
	{{ HTML::link(
		'/pages/servicios/requisitos-para-solicitar-un-servicio',
		'Requisitos para solicitar un servicio.' )                            
		}}</p>

	 <p>Contacto: Ángel Martínez</p>
	 <p>Teléfono: 5622 9582</p> 
	 <p>Correo electrónico: <a href="mailto:amartin@unam.mx">amartin@unam.mx</a></p>

	 <br>

	<h4>Filmografía Mexicana</h4>

	<p>El departamento de Documentación también ha realizado una base de datos llamada <a href="http://www.filmografiamexicana.unam.mx/"><b>Filmografía Mexicana</b></a> y se compone por más de 18000 títulos que incluye las fichas técnicas de películas de ficción, documentales, noticieros, largometrajes, cortometrajes, películas de animación y videohomes sobre la producción cinematográfica mexicana.</p>

	<p>El acceso a esta base de datos es totalmente gratuito y para todo público.</p>
	
	<b>Visita: <a href="http://www.filmografiamexicana.unam.mx/">Filmografía Mexicana</a></b>
	<br>
	<br>
	<p>Contacto: Lic. Mario Quezada</p>
	<p>Teléfono: 5622 9582</p> 
	

@stop
