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

@section('sidebar')
	@include('elements.menus.servicios', array('selected' => 8))
@stop



@section('content')

	<h1>Préstamo y alquiler de películas</h1>


	<p>Muchas de las películas del acervo de la Filmoteca de la UNAM están resguardadas para su conservación como material histórico; es decir, muchas de estas películas son copias únicas, originales o cuyas condiciones no son las adecuadas para permitir su exhibición, ya que podrían sufrir un desgaste irreparable.</p> 
	
	<p>Por otro lado, muchos filmes están disponibles para ser solicitados en préstamo o alquiler. Es el caso de las exhibiciones que permanentemente se programan en las diversas salas de que dispone la UNAM en todas sus sedes dentro y fuera de Ciudad Universitaria. Asimismo, el Servicio Exterior Mexicano solicita regularmente películas mexicanas para exhibirlas a través de los consulados mexicanos en el extranjero. Además, continuamente se alquilan cintas en diversos formatos para festivales, muestras y ciclos temáticos nacionales e internacionales.</p>

	<p>La Unidad de Acceso Interinstitucional (UAI) está a cargo del servicio de préstamo y alquiler. Para obtener materiales, el solicitante debe definir los títulos requeridos, es decir, se deben solicitar los títulos específicos de las películas buscadas. La UAI se encarga de responder si los títulos existen o no en el acervo, los formatos en que están disponibles,  y si lo están para las fechas solicitadas; también informa sobre las tarifas y condiciones bajo las que se deberán manejar los materiales.</p>

	<p>Contacto: José Manuel García </p>
	<p>Tel: 5622 9597 </p>
	<p>Correo electrónico: <a href="mailto:mvng@unam.mx">mvng@unam.mx</a></p>

	<p>Si quieres hacer alguna solicitud, consulta los  
	{{ HTML::link(
		'/pages/servicios/lineamentos-generales-para-solicitar-un-servicio',
		'Lineamientos para acceso al material.' )                            
		}}</p>
@stop