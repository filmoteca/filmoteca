@section('scripts')

<script type='text/javascript' src='/bower_components/slider-camera/jquery.min.js'></script>
<script type='text/javascript' src='/bower_components/slider-camera/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='/bower_components/slider-camera/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='/bower_components/slider-camera/camera.min.js'></script> 

<script>
  jQuery(function(){

   jQuery('#camera_wrap_1').camera({
    thumbnails: true
  });
 });
</script>

@stop

@section('styles')
  <link rel='stylesheet' id='camera-css'  href='/bower_components/slider-camera/css/camera.css' type='text/css' media='all'> 
@stop


@section('breadcrumbs')
<li>
	<a href="/pages/servicios/index">
		Servicios
	</a>
</li>
<li class="active">
	Centro de documentación
</li>
@stop

@section('sidebar')
	@include('elements.menus.servicios', array('selected' => 3))
@stop


@section('content')

	<div id="back_to_camera">
       
   
    <div class="fluid_container">
        <h5>Visita el Centro de Documentación - Filmoteca UNAM</h5>
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div data-thumb="/imgs/servicios/centro-documentacion/thumbs/documentacion1.jpg" data-src="/imgs/servicios/centro-documentacion/documentacion1.jpg">
                <div class="camera_caption fadeFromBottom">
                    Carteles
                </div>
            </div>
            <div data-thumb="/imgs/servicios/centro-documentacion/thumbs/documentacion2.jpg" data-src="/imgs/servicios/centro-documentacion/documentacion2.jpg">
                <div class="camera_caption fadeFromBottom">
                    Colecciones
                </div>
            </div>
            <div data-thumb="/imgs/servicios/centro-documentacion/thumbs/documentacion3.jpg" data-src="/imgs/servicios/centro-documentacion/documentacion3.jpg">
                <div class="camera_caption fadeFromBottom">
                    <em>Área de consulta. Centro de Documentación DGAC</em>
                </div>
            </div>
            <div data-thumb="/imgs/servicios/centro-documentacion/thumbs/documentacion4.jpg" data-src="/imgs/servicios/centro-documentacion/documentacion4.jpg">
                <div class="camera_caption fadeFromBottom">
                    Guiones
                </div>
            </div>
            <div data-thumb="/imgs/servicios/centro-documentacion/thumbs/documentacion5.jpg" data-src="/imgs/servicios/centro-documentacion/documentacion5.jpg">
                <div class="camera_caption fadeFromBottom">
                    Conoce nuestro Acervo Bibliográfico
                </div>
            </div>
            <div data-thumb="/imgs/servicios/centro-documentacion/thumbs/documentacion6.jpg" data-src="/imgs/servicios/centro-documentacion/documentacion6.jpg">
                <div class="camera_caption fadeFromBottom">
                    Conoce nuestro Acervo Videográfico
                </div>
            </div>
        </div><!-- #camera_wrap_1 -->

    </div><!-- .fluid_container -->   

</div>

	<h1>Centro de documentación</h1>

	<p>El Centro de Documentación de la Filmoteca de la UNAM tiene en custodia varias colecciones documentales originales de época, así como materiales de reciente factura que dan cuenta de la producción, exhibición y distribución del cine en México.  Entre el material que resguarda se encuantran libros, revistas, periódicos, más de 9 mil carteles y 85 mil fotografías, además de stills y recortes hemerográficos, fotomontajes y un buen número de películas en formato DVD. 
	</p>

	<p>Asimismo, custodia colecciones tan importantes como el <i>Fondo Fernando de Fuentes, Fondo Alejandro Galindo y Fondo Salvador Toscano</i> por mencionar algunos.</p>
	
	<p>El Centro de Documentación atiende a estudiantes, académicos, investigadores y público en general, tanto en México como en el extranjero. Presta el servicio de consulta y acceso a los recursos documentales, visionado de películas, servicios electrónicos de orientación e información sobre temas específicos de cine, reproducción y obtención de documentos, así como visitas guiadas.</p>
	
	<p>*Para tener acceso al material consulta los
		{{ HTML::link(
			'/pages/servicios/requisitos-para-solicitar-un-servicio',
			'Requisitos para solicitar un servicio.' )                            
			}}</p>

	<p><b>El Centro de Documentación está abierto al público en general.</b></p>

	<p>Se encuentra ubicado dentro de las instalaciones de la Filmoteca de la UNAM, Circuito Mtro. Mario de la Cueva s/n (frente a la Facultad de Ciencias Políticas), Ciudad Universitaria.</p>

	<p>Horario de servicio de lunes a jueves de 8:30 a 19:00 hrs. y los viernes de 8:30 a 18:30 hrs.</p>
	
	<p>Responsable: Antonia Rojas</p> 
	<p>Teléfono: 5622 4800 ext. 47490</p>
	<p>Correo electrónico: <a href="mailto:antonia@unam.mx">antonia@unam.mx</a></p>


@stop