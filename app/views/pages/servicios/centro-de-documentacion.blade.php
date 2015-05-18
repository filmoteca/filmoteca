@section('scripts')

<!-- This plugin requires jquery 1.7 to work. This jQuery's version is packaged with slider-camera plugin. -->
<script type='text/javascript' src='/bower_components/slider-camera/scripts/jquery.min.js'></script>
<script type='text/javascript' src='/bower_components/slider-camera/scripts/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='/bower_components/slider-camera/scripts/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='/bower_components/slider-camera/scripts/camera.min.js'></script>

<script>
  jQuery(function(){

   jQuery('#camera_wrap_1').camera({
    thumbnails: true
  });

   jQuery('#camera_wrap_2').camera({
    thumbnails: true
  });

   jQuery('#camera_wrap_3').camera({
    thumbnails: true
  });

   jQuery('#camera_wrap_4').camera({
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
	@include('elements.menus.servicios', array('selected' => 2))
@stop


@section('content')

    <div class="img-servicios">
        <img src="/imgs/servicios/centro-documentacion.jpg" aling="left" class="img-responsive" 'Catalogación'>
    </div>

	<h1>Centro de documentación</h1>

	<p>El Centro de Documentación de la Filmoteca de la UNAM tiene en custodia varias colecciones documentales originales de época, así como materiales de reciente factura que dan cuenta de la producción, exhibición y distribución del cine en México. Entre el material que resguarda se encuantran libros, revistas, periódicos, más de 9 mil carteles y 85 mil fotografías, además de stills y recortes hemerográficos, fotomontajes y un buen número de películas en formato DVD. 
	</p>

	<p>También custodia colecciones tan importantes como el <i>Fondo Fernando de Fuentes, Fondo Alejandro Galindo y Fondo Salvador Toscano</i> por mencionar algunos.</p>
	
	<p>Atiende a estudiantes, académicos, investigadores y público en general, tanto en México como en el extranjero. Presta el servicio de consulta y acceso a los recursos documentales, visionado de películas, servicios electrónicos de orientación e información sobre temas específicos de cine, reproducción y obtención de documentos, así como visitas guiadas.</p>
	
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

    <div class="col-6 col-sm-6 col-lg-6">
        <div id="back_to_camera">     
       
            <div class="fluid_container">
                <h3>Centro de Documentación</h3>
                <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
                    <div data-thumb="" data-src="/imgs/centro-documentacion/centro-doc/documentacion1.jpg">
                        <div class="camera_caption fadeFromBottom">
                            Carteles
                        </div>
                    </div>
                    <div data-thumb="" data-src="/imgs/centro-documentacion/centro-doc/documentacion2.jpg">
                        <div class="camera_caption fadeFromBottom">
                            Colecciones
                        </div>
                    </div>

                    <div data-thumb="" data-src="/imgs/centro-documentacion/centro-doc/documentacion4.jpg">
                        <div class="camera_caption fadeFromBottom">
                           <em>Área de consulta. Centro de Documentación DGAC</em>
                        </div>
                    </div>
                    <div data-thumb="" data-src="/imgs/centro-documentacion/centro-doc/documentacion6.jpg">
                        <div class="camera_caption fadeFromBottom">
                            Conoce nuestro Acervo Bibliográfico
                        </div>
                    </div>
                    
                </div><!-- #camera_wrap_1 -->

            </div><!-- .fluid_container -->   

        </div>
    </div>


    <div class="col-6 col-sm-6 col-lg-6">
        <div id="back_to_camera">     
       
            <div class="fluid_container">
                <h3>Iconoteca</h3>
                <div class="camera_wrap camera_azure_skin" id="camera_wrap_2">
                    
                    <div data-thumb="" data-src="/imgs/centro-documentacion/fotomontajes/fotomontajes2.jpg">
                        <!-- <div class="camera_caption fadeFromBottom">
                            Colecciones
                        </div> -->
                    </div>
                    <div data-thumb="" data-src="/imgs/centro-documentacion/fotomontajes/fotomontajes3.jpg">
                        <!-- <div class="camera_caption fadeFromBottom">
                            <em>Área de consulta. Centro de Documentación DGAC</em>
                        </div> -->
                    </div>
                    <div data-thumb="" data-src="/imgs/centro-documentacion/fotomontajes/fotomontajes4.jpg">
                        <!-- <div class="camera_caption fadeFromBottom">
                           <em>Área de consulta. Centro de Documentación DGAC</em>
                        </div> -->
                    </div>

                    <div data-thumb="" data-src="/imgs/centro-documentacion/fotomontajes/fotomontajes6.jpg">
                        <!-- <div class="camera_caption fadeFromBottom">
                            Conoce nuestro Acervo Videográfico
                        </div> -->
                    </div>
                </div><!-- #camera_wrap_2 -->

            </div><!-- .fluid_container -->   

        </div>
    </div>
    
    <div class="col-6 col-sm-6 col-lg-6">
        <div id="back_to_camera">     
       
             <div class="fluid_container">
                <h3>Fototeca</h3>
                <div class="camera_wrap camera_azure_skin" id="camera_wrap_3">
                    <div data-thumb="" data-src="/imgs/centro-documentacion/fototeca/fototeca1.jpg">
                        <!-- <div class="camera_caption fadeFromBottom">
                            Carteles
                        </div> -->
                    </div>
                    <div data-thumb="" data-src="/imgs/centro-documentacion/fototeca/fototeca2.jpg">
                        <!-- <div class="camera_caption fadeFromBottom">
                            Colecciones
                        </div> -->
                    </div>
                    <div data-thumb="" data-src="/imgs/centro-documentacion/fototeca/fototeca3.jpg">
                       <!--  <div class="camera_caption fadeFromBottom">
                            <em>Área de consulta. Centro de Documentación DGAC</em>
                        </div> -->
                    </div>
                  
                    </div>
                </div><!-- #camera_wrap_3 -->

            </div><!-- .fluid_container -->   

        </div>
 


    <div class="col-6 col-sm-6 col-lg-6">
        <div id="back_to_camera">     
       
            <div class="fluid_container">
                <h3>Biblioteca</h3>
                <div class="camera_wrap camera_azure_skin" id="camera_wrap_4">
                    <div data-thumb="" data-src="/imgs/centro-documentacion/biblioteca/biblioteca1.jpg">
                       <!--  <div class="camera_caption fadeFromBottom">
                            Carteles
                        </div> -->
                    </div>
                    <div data-thumb="" data-src="/imgs/centro-documentacion/biblioteca/biblioteca2.jpg">
                       <!--  <div class="camera_caption fadeFromBottom">
                            Colecciones
                        </div> -->
                    </div>
                    <div data-thumb="" data-src="/imgs/centro-documentacion/biblioteca/biblioteca3.jpg">
                       <!--  <div class="camera_caption fadeFromBottom">
                            <em>Área de consulta. Centro de Documentación DGAC</em>
                        </div> -->
                    </div>
                    
                    
                </div><!-- #camera_wrap_4 -->

            </div><!-- .fluid_container -->   

        </div>
    </div>
    </div>

@stop