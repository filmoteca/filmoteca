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
			Libreria
		</a>
	</li>
	<li class="active">
		Puntos de venta
	</li>
@stop


@section('sidebar')
	@include('elements.menus.libreria', array('selected' => 0))
@stop


@section('content')

    <div id="back_to_camera">
   
        <div class="fluid_container">

        <h2>LIBRERIA FILMOTECA UNAM</h2>
        <br>
            <h5>Visita la libreria de la Filmoteca UNAM</h5>
            <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
                <div data-thumb="/imgs/libreria/thumbs/libreria-filmoteca.jpg" data-src="/imgs/libreria/libreria-filmoteca.jpg">
                    <div class="camera_caption fadeFromBottom">
                        
                    </div>
                </div>
                <div data-thumb="/imgs/libreria/thumbs/libreria1.jpg" data-src="/imgs/libreria/libreria1.jpg">
                    <div class="camera_caption fadeFromBottom">
                        
                    </div>
                </div>
                <div data-thumb="/imgs/libreria/thumbs/libreria2.jpg" data-src="/imgs/libreria/libreria2.jpg">
                    <div class="camera_caption fadeFromBottom">
                        
                    </div>
                </div>
                <div data-thumb="/imgs/libreria/thumbs/libreria3.jpg" data-src="/imgs/libreria/libreria3.jpg">
                    <div class="camera_caption fadeFromBottom">
                        
                    </div>
                </div>            
                
            </div><!-- #camera_wrap_1 -->

        </div><!-- .fluid_container -->   

    </div>

        <p>Visita la libreria de la Filmoteca que se encuentra en Circuto exterior Mtro. Mario de la Cueva s/n, en Ciudad Universitaria.</p>
        <p>Aquí podrás encontrar libros, películas y articulos promocionales, todo referente a la cinematografía.</p>

        <h5>Otros puntos de venta</h5>
        <p>LIBRERÍA JULIO TORRI</p>
        <p>Visita la libreria de la Filmoteca que se encuentra en Circuto exterior Mtro. Mario de la Cueva s/n, en Ciudad Universitaria.</p>


@stop