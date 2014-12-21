@section('breadcrumbs')
<li>
	<a href="/pages/servicios/index">
		Servicios
	</a>
</li>
<li class="active">
	Museografía
</li>
@stop

@section('sidebar')
	@include('elements.menus.servicios', array('selected' => 7))
@stop



@section('content')

	<div class="img-servicios">
		<img src="/assets/imgs/exposiciones-museo.jpg" aling="center">
	</div>  
	<h1>Museografía</h1>

	<p>Entre las funciones de esta área se encuentra el almacenamiento y conservación de la colección de más de 300 aparatos cinematográficos antiguos que pertenecen al acervo de la Filmoteca de la UNAM y que relatan las transiciones tecnológicas del cinematógrafo, sus inicios, antecedentes y progresos.</p>

	<p>Otra de sus funciones es coordinar la realización de exposiciones donde se presenta nuestro acervo cinematográfico, que compone la colección de aparatos cinematográficos, así como <i>stills</i> (fotografías de filmaciones), posters e imágenes.
	</p>

	<p>Estas exposiciones pueden ser:</p>

	<blockquote>
		<ul>
		<li><b>Itinerantes:</b> exposiciones que se realizan para la comunidad estudiantil fundamentalmente, y que se llevan a las distintas facultades y escuelas de la Universidad.</li>

		<li><b>Internas:</b> exposiciones coordinadas por el área de Museografía, que se montan dentro de las instalaciones de la Filmoteca.</li>
		
		<li><b>Externas:</b> exposiciones realizadas en cooperación con otras instituciones a las que se les facilita el material para llevarlo a distintas sedes.</li>

		</ul>
	</blockquote>

	<p>La colección de aparatos antiguos está disponible para su préstamo a instituciones que cuenten con la capacidad de mantenerlos en buenas condiciones, y para el público en general a través de las exposiciones.</p>

	<p>Contacto: Omar Leobardo Marín</p> 
	<p>Teléfono: 5622 4800 ext: 47488 </p>
	<p>Correo electrónico: <a href="mailto:leobardo_marin@hotmail.com">leobardo_marin@hotmail.com</a></p>

	<p>Si quieres hacer alguna solicitud, consulta los  
	{{ HTML::link(
		'/pages/servicios/Lineamientos para acceso al material.',
		'requisitos.' )                            
		}}</p>

@stop

