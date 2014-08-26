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

	<h1>Departamento de Catalogación </h1>

	<p>El departamento de Catalogación depende de la Subdirección de Acervos. Su función principal es:</p> 

	<blockquote>
		<ul>
			<li>Realizar la revisión y catalogación del material cinematográfico para la elaboración de fichas de contenido en las cuales se identifican personajes, épocas, sucesos, acontecimientos históricos, etcétera. </li>

		<li>Concentrar toda la información catalográfica de cada registro que se realiza.</li>
		</ul>
	</blockquote>

	<p>Gracias a la información que se recopila en este departamento es posible facilitar el acceso, de forma organizada, a los investigadores, realizadores e interesados en las colecciones y materiales de los que dispone la Filmoteca. </p>

	 <p>Responsable: Ángel Martínez</p>
	 <p>Teléfono: 56 22 95 82</p> 
	 <p>Correo electrónico: <a href="mailto:amartin@unam.mx">amartin@unam.mx</a></p>

	<h2>Filmografía Nacional</h2>

	<p>Es una base de datos que se comenzó a realizar en el área de Catalogación con un proyecto conocido como El índice cronológico del cine mexicano. Actualmente la base de datos se compone por más de 18 mil títulos de películas, cortometrajes, largometrajes, películas de ficción, documentales, noticieros, animaciones y todo tipo de producciones mexicanas, excepto los programas de televisión. Toda la información de estas producciones se ingresa a la base de datos con más de 25 campos de información para poder acceder a información especifica de cada uno de los trabajos cinematográficos.</p>

	<p>El acceso a esta base de datos es totalmente gratuito y para todo público, la única condición es registrarse antes de ingresar a ésta, todo ello vía internet. </p>

	<p>Responsable: Lic. Mario Quezada</p>
	<br><h5>Visita: <a href="http://www.filmografiamexicana.unam.mx/">Filmografía Nacional</a></h5>
	<br>
</div>

@stop
