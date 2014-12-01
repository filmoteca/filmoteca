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





@section('content')

<div class="sidebar">
	@include('elements.menus.servicios', array('selected' => 2))
</div>

<div class="content">

	<h1>Catalogación </h1>

	<p>El Departamento de Catalogación realiza la revisión, catalogación y registro del material cinematográfico del acervo de la Filmoteca de la UNAM y elabora fichas de contenido en las cuales se identifican personajes, épocas, sucesos, acontecimientos históricos, etcétera.</p> 

	<p>Gracias a la información que se recopila en este departamento es posible facilitar el acceso, de forma organizada, a los investigadores, realizadores e interesados en las colecciones y materiales de los que dispone la Filmoteca.</p>

	 <p>Contacto: Ángel Martínez</p>
	 <p>Teléfono: 5622 9582</p> 
	 <p>Correo electrónico: <a href="mailto:amartin@unam.mx">amartin@unam.mx</a></p>

	 <p>Si quieres hacer alguna solicitud, consulta los  
	{{ HTML::link(
		'/pages/servicios/lineamentos-generales-para-solicitar-un-servicio',
		'Lineamientos para acceso al material.' )                            
		}}</p>


	<h2>Filmografía Mexicana</h2>

	<p>Es una base de datos general sobre la producción cinematográfica mexicana. Fue creada en el Departamento de Catalogación y se compone por más de 18 mil títulos que incluye la ficha de películas de ficción, documentales, noticieros, largometrajes, cortometrajes, películas de animación y videohomes.</p>

	<p>El acceso a esta base de datos es totalmente gratuito y para todo público.</p>

	<p>Contacto: Lic. Mario Quezada</p>
	<p>Teléfono: 5622 9582</p> 
	<br><h5>Visita: <a href="http://www.filmografiamexicana.unam.mx/">Filmografía Mexicana</a></h5>
	<br>
</div>

@stop
