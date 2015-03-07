@section('breadcrumbs')
<li>
	<a href="/pages/servicios/index">
		Servicios
	</a>
</li>
<li class="active">
	Depósito y resguardo
</li>
@stop

@section('sidebar')
	@include('elements.menus.servicios', array('selected' => 3))
@stop


@section('content')

	
	<div class="img-servicios">
		<img src="/imgs/servicios/bovedas.jpg" aling="left" class="img-responsive" 'Bóvedas'>
	</div>

	<h1>Depósito y resguardo </h1>

	<p>Una de las funciones principales de la Dirección General de Actividades Cinematográficas - Filmoteca de la UNAM, es recibir en depósito y resguardo películas de la producción cinematográfica mexicana y universitaria con el fin de preservar la memoria fílmica del país para el futuro.</p>

	<p>Para ello cuenta con 15 bóvedas con una infraestructura moderna y adecuada donde se resguardan más de 46,000 realizaciones cinematográficas; estas bóvedas están diseñadas para garantizar las condiciones adecuadas de temperatura, humedad y seguridad para conservar el material fílmico. Contamos con ocho bóvedas para almacenar cintas de acetato y siete para el exigente resguardo de las películas de nitrato.</p>

	<p>A través de la Subdirección de Acervos, la Filmoteca de la UNAM ha tenido un continuo contacto con la comunidad cinematográfica de México, recibiendo una gran cantidad de películas por parte de casas productoras y/o distribuidoras, directores, productores, familias de realizadores y coleccionistas, entre otros.</p>
	
	<p>Si estás interesado en realizar algún depósito comunícate.</p>
	
	<p>Contacto: Miguel Ángel Recillas, Subdirector de Acervos </p>
	<p>Tel: 5622 9588 </p>
	<p>Correo electrónico: <a href="mailto:marh@unam.mx">marh@unam.mx </a></p>
	<br>

	<p>Contacto: Juan García, Bóvedas</p>
	<p>Tel: 5622 9586 </p>
	<p>Correo electrónico: <a href="mailto:filmbov@unam.mx">filmbov@unam.mx</a></p>

@stop