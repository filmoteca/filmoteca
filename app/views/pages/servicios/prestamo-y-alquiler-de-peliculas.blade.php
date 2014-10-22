@section('breadcrumbs')
<li>
	<a href="/pages/servicios/index">
		Servicios
	</a>
</li>
<li class="active">
	Préstamo y alquiler de películas
</li>
@stop





@section('content')

<div class="sidebar">
	@include('elements.menus.servicios', array('selected' => 8))
</div>

<div class="content">
	<h1>Préstamo y alquiler de películas* </h1>


	<p>El sistema de préstamo y alquiler está a cargo de la Unidad de acceso interinstitucional, un área creada por la necesidad de establecer un vínculo para atender las solicitudes de préstamos de materiales fílmicos, dentro y fuera del país, mediante una atención personalizada. La filmoteca cuenta con una inmensa cantidad de filmes que se encuentran a disposición del público para su préstamo y alquiler. Se atienden únicamente las solicitudes relacionadas con material fílmico completo, desde filmes en 16mm hasta en formato DVD.</p> 
	<p>Responsable: José Manuel García </p>
	<p>Tel: 56 22 95 97 </p>
	<p>Correo electrónico: <a href="mailto:mvng@unam.mx">mvng@unam.mx</a></p>

	<p>*Para tener acceso a este departamentos consultar 
		{{ HTML::link(
			'/pages/servicios/lineamientos_generales_para_acceder_al_material',
			'Lineamientos generales para acceso al material' )                            
		}}
	</p>
</div>
@stop