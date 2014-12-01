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





@section('content')

<div class="sidebar">
	@include('elements.menus.servicios', array('selected' => 1))
</div>

<div class="content">
	<div class="img-servicios">
		<img src="/assets/imgs/fragmentos.jpg" aling="left">
	</div>
	<h1>Banco de imagen</h1>

	<p>La Filmoteca de la UNAM tiene entre su acervo películas de ficción, documentales y noticieros cinematográficos que pone a disposición de quiénes buscan incorporar fragmentos de imágenes en movimiento para la realización de un proyecto audiovisual.
	</p>

	<p>¿Necesita algunos segundos de escenas de la Revolución Mexicana? ¿Imágenes de Xochimilco en los años 20 del siglo pasado? ¿La construcción de la Torre Latinoamericana? ¿El movimiento estudiantil del 68?
	</p>

	<p>El Banco de imágenes se nutre con más de 12 mil registros de material de stock muy variado, donde es posible encontrar imágenes desde 1896 hasta 1970, época en la que el formato de grabación cambió para dar paso al video.</p> 

	<p>El servicio que ofrece esta área incluye desde que se recibe la solicitud, se realiza la búsqueda, localización y visualización del material y su transferencia al formato de preferencia del solicitante. Dependiendo de la naturaleza del proyecto, se aplican diferentes tarifas.</p>

	<p>Contacto: Nahún Calleros</p> 
	<p>Teléfono: 5622 9630 </p>
	<p>Correo electrónico: <a href="mailto:carriles@unam.mx">carriles@unam.mx</a></p>

	<p>Si quieres hacer alguna solicitud, consulta los  
	{{ HTML::link(
		'/pages/servicios/lineamentos-generales-para-solicitar-un-servicio',
		'Lineamientos para acceso al material.' )                            
		}}</p>
</div>

@stop