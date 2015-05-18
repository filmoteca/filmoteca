@section('breadcrumbs')
<li>
	<a href="/pages/servicios/index">
		Difusión
	</a>
</li>
<li class="active">
	Exposiciones
</li>
@stop

@section('sidebar')
	@include('elements.menus.press', array('selected' => 1))
@stop



@section('content')

	<div class="img-servicios">
		<img src="/imgs/exposiciones/exposiciones.jpg" aling="center">
	</div>  
	<h1>Exposiciones</h1>

	<p>Entre las funciones de esta área se encuentra el almacenamiento y conservación de la colección de más de 300 aparatos cinematográficos antiguos que pertenecen al acervo de la Filmoteca de la UNAM y que relatan las transiciones tecnológicas del cinematógrafo, sus inicios, antecedentes y progresos. Visita nuestro <a href="http://www.filmoteca.unam.mx/MUVAC/">Museo virtual de aparatos cinematográficos.</a></p>

	<p>Otra de sus funciones es coordinar la realización de exposiciones donde se presenta nuestro acervo cinematográfico, que compone la colección de aparatos cinematográficos, así como <i>stills</i> (fotografías de filmaciones), posters e imágenes.
	</p>

	<p>Estas exposiciones pueden ser:</p>

	
		<ul>
		<li><b>Itinerantes:</b> exposiciones que se realizan para la comunidad estudiantil fundamentalmente, y que se llevan a las distintas facultades y escuelas de la Universidad.</li>

		<li><b>Internas:</b> exposiciones coordinadas por el área de Museografía, que se montan dentro de las instalaciones de la Filmoteca.</li>
		
		<li><b>Externas:</b> exposiciones realizadas en cooperación con otras instituciones a las que se les facilita el material para llevarlo a distintas sedes.</li>
		</ul>
	
	<p>La colección de aparatos antiguos está disponible para su préstamo a instituciones que cuenten con la capacidad de mantenerlos en buenas condiciones, y para el público en general a través de las exposiciones.</p>

	<p>Si quieres hacer alguna solicitud, consulta los  
		{{ HTML::link(
			'/pages/servicios/requisitos-para-solicitar-un-servicio',
			'Requisitos para solicitar un servicio.' )                            
			}}</p>


	<p>Contacto: Omar Leobardo Marín</p> 
	<p>Teléfono: 5622 4800 ext: 47488 </p>
	<p>Correo electrónico: <a href="mailto:leobardo_marin@hotmail.com">leobardo_marin@hotmail.com</a></p>

	
@stop

