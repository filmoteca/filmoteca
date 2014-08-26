@section('breadcrumbs')
<li>
	<a href="/pages/servicios/index">
		Servicios
	</a>
</li>
<li class="active">
	Exposiciones
</li>
@stop





@section('content')

<div class="sidebar">
	@include('elements.menus.servicios', array('selected' => 4))
</div>

<div class="content">

	<div class="img-servicios">
		<img src="/assets/imgs/exposiciones-museo.jpg" aling="center">
	</div>  
	<h1>Museografía*</h1>

	<p> Esta área fue establecida por la necesidad de registrar los instrumentos cinematográficos que fueron creados para hacer cine y difundir otra cara del abundante acervo de la Filmoteca; esta otra cara se compone por stills, pósteres, imágenes, libros y más de 300 aparatos antiguos, lo que convierte a la Filmoteca en uno de los archivos más importantes de América Latina. </p>

	<p>La colección de aparatos antiguos está disponible, para su préstamo a instituciones que cuenten con la capacidad de mantenerlos en buenas condiciones y para el público en general a través de las exposiciones que se realizan. 
	</p>

	<p>Responsable: Omar Leobardo Marín</p> 
	<p>Tel: 56 22 48 00 ext: 47488 </p>
	<p>Correo electrónico: <a href="mailto:leobardo_marin@hotmail.com">leobardo_marin@hotmail.com</a></p>

	<p>*Para tener acceso a este departamentos consultar 
		{{ HTML::link(
		'/pages/servicios/lineamientos_generales_para_acceder_al_material',
		'Lineamientos generales para acceso al material' )                            
		}}
	</p>
</div>
@stop

