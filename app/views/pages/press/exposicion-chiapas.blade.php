@section('scripts')

<!-- This plugin requires jquery 1.7 to work. This jQuery's version is packaged with slider-camera plugin. -->
<script type='text/javascript' src='/bower_components/slider-camera/scripts/jquery.min.js'></script>
<script type='text/javascript' src='/bower_components/slider-camera/scripts/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='/bower_components/slider-camera/scripts/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='/bower_components/slider-camera/scripts/camera.min.js'></script>

<script>
$(document).ready(function(){
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
		<a href="/pages/press/index">
			Difusión
		</a>
	</li>
	<li class="active">
		Exposiciones / Exposiciones anteriores
	</li>
@stop


@section('sidebar')
	@include('elements.menus.press', array('selected' => 1))
@stop


@section('content')

    <div id="back_to_camera">
       
   
    <div class="fluid_container">

    <h2>CHIAPAS EN LA CINEMATOGRAFÍA MEXICANA</h2>
    <br>
        <h5>Visita nuestras exposiciones - Filmoteca UNAM</h5>
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div data-thumb="/imgs/exposiciones/chiapas/thumbs/exposicion-chiapas1.jpg" data-src="/imgs/exposiciones/chiapas/exposicion-chiapas1.jpg">
                <div class="camera_caption fadeFromBottom">
                    
                </div>
            </div>
            <div data-thumb="/imgs/exposiciones/chiapas/thumbs/exposicion-chiapas2.jpg" data-src="/imgs/exposiciones/chiapas/exposicion-chiapas2.jpg">
                <div class="camera_caption fadeFromBottom">
                    
                </div>
            </div>
            <div data-thumb="/imgs/exposiciones/chiapas/thumbs/exposicion-chiapas3.jpg" data-src="/imgs/exposiciones/chiapas/exposicion-chiapas3.jpg">
                <div class="camera_caption fadeFromBottom">
                    
                </div>
            </div>            
            
        </div><!-- #camera_wrap_1 -->

    </div><!-- .fluid_container -->   

</div>

<!-- <div class="img-servicios">
		<img src="/imgs/historias-recuperadas/dracula.jpg" class="img-responsive" 'Drácula' aling="left">
	</div> -->
    <h5>Cédula</h5>
        <p>Entre las figuras chiapanecas más destacadas de la cinematografía nacional se encuentra Carlos Villatoro, quien trabajo con directores como Fernando de Fuentes,
        Juan Bustillo Oro, Gabriel García Moreno y Miguel Contreras Torres. También se encuentra en esta lista Amanda de Llano, que realizó inolvidables caracterizaciones
        en filmes como <strong><em>Campeón sin corona </em></strong>y <strong><em>La rebelión de los colgados</em></strong> (Emilio Fernández y Alfredo B. Crevenna, 1954) por cuya actuación mereció el Ariel, máximo galardón de la cinematografía mexicana. A esta pareja de histriones
        la sucederían destacadas personalidades de la actuación como Esperanza Issa, Pancho Córdova, Miguel Torruco, Irma Serrano y Jaime Moreno, además de directores como Alberto Tito Gout.</p>

        <p>De esta manera, La Filmoteca de la Dirección General de Actividades Cinematográficas de la UNAM que conserva en sus acervos fílmicos y biblio-hemerográficos los testimonios de este devenir cinematográfico, celebra la presencia de Chiapas en el cine a través de esta exposición compuesta por fotografías y stills,la aportación del gran estado de Chiapas a la cinematografía mexicana.</p>

@stop