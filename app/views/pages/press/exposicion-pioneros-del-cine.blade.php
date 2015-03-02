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
 });
</script>

@stop

@section('styles')
  <link rel='stylesheet' id='camera-css'  href='/bower_components/slider-camera/css/camera.css' type='text/css' media='all'> 
@stop

@section('breadcrumbs')
	<li>
		<a href="/pages/acervo/index">
			Difusión
		</a>
	</li>
	<li class="active">
		Exposiciones / Exposiciones recientes
	</li>
@stop


@section('sidebar')
	@include('elements.menus.press', array('selected' => 1))
@stop


@section('content')

    <div id="back_to_camera">
       
   
    <div class="fluid_container">

    <h2>PIONEROS DEL CINE</h2>
    <br>
        <h5>Visita nuestras exposiciones - Filmoteca UNAM</h5>
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div data-thumb="/imgs/exposiciones/pioneros/thumbs/exposicion-pioneros1.jpg" data-src="/imgs/exposiciones/pioneros/exposicion-pioneros1.jpg">
                <div class="camera_caption fadeFromBottom">
                    
                </div>
            </div>
            <div data-thumb="/imgs/exposiciones/pioneros/thumbs/exposicion-pioneros2.jpg" data-src="/imgs/exposiciones/pioneros/exposicion-pioneros2.jpg">
                <div class="camera_caption fadeFromBottom">
                    
                </div>
            </div>
            <div data-thumb="/imgs/exposiciones/pioneros/thumbs/exposicion-pioneros3.jpg" data-src="/imgs/exposiciones/pioneros/exposicion-pioneros3.jpg">
                <div class="camera_caption fadeFromBottom">
                    
                </div>
            </div>
            <div data-thumb="/imgs/exposiciones/pioneros/thumbs/exposicion-pioneros4.jpg" data-src="/imgs/exposiciones/pioneros/exposicion-pioneros4.jpg">
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

    <p>El 28 de diciembre de 1895 oficialmente llegó a su punto culminante una añeja pasión del ser humano de recrear el movimiento, reproducir la realidad: los hermanos Louis y Auguste Lumière exhiben públicamente una serie de materiales cinematográficos de  producción propia, en el salón Indien del Gran Café de París.</p>

    <p>Este deseo de capturar, reproducir realidades, encuentra sus antecedentes más remotos en las pinturas rupestres  y el teatro de sombras chino, y recibió en su desarrollo invaluables  aportaciones de genios de la humanidad como Aristóteles y Leonardo Da Vinci.</p>

    <p>Ciencia y Arte. Visionarios, científicos, creadores y artistas participan, de tiempo en tiempo, en la conformación de varios inventos para capturar la realidad: cámaras oscuras, linternas mágicas, juguetes ópticos, sucesiones de fotografías; y el descubrimiento del fenómeno de la persistencia de la visión, definido por Joseph Plateau, precipita la creación de una serie de aparatos: fenaquistiscopio, zoótropo, fusil fotográfico, praxinoscopio, que retoman, adaptan y patentizan los hermanos Lumière en su mítica cámara-proyector.</p>

    <p>De los albores de la creación del cine, en una época de pleno auge en la  invención tecnológica, el cinematógrafo se significa además como una gran revolución de las artes visuales y va reuniendo en sus capacidades expresivas el concurso de las bellas artes.</p>

    <p>Vistas de la realidad más cotidiana, investigación científica pura, las filmaciones y los experimentos fueron definiendo esas capacidades expresivas del cinematógrafo, que encontraron en Georges Méliès a su primer gran realizador quien logra, además,  desarrollar sus inquietudes artísticas, añadiendo en buena medida ilusión y truco para crear una realidad a través de la puesta en escena.</p>

    <p>Esta muestra gráfica y tecnológica entrelaza esos afanes de descubrimiento científico y experimentación artística, e ilustra la labor de rescate, restauración,  conservación y difusión que la Filmoteca ha venido realizando durante más de medio siglo, con juguetes ópticos y aparatos que llevan al espectador por un recorrido a través del desarrollo tecnológico del medio y presenta a esos científicos y artistas que entregaron lo mejor de sus capacidades creativas para brindarnos el espectáculo de imágenes en movimiento, el  cinematógrafo.</p>

    <h5>Detalles</h5>
    <p>Esta exposición consta de 20 reproducciones de carteles, originalmente montados en bastidores con acrílicos, de 60 x 90 cm. <strong> Todo el material está digitalizado para ofrecerlo a sedes foráneas.</strong></p>

@stop