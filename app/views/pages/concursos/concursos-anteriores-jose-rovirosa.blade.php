<?php
$js = array(
	'/bower_components/jqueryui/ui/minified/jquery-ui.min');
$css = array(
	'/bower_components/jqueryui/themes/base/minified/jquery-ui.min');

$this->Html->css($css, null, array('inline' => false));
$this->Html->script($js, array('inline' => false));	
?>		
		<script>
			$(document).ready(function() {

				$('.fancybox').fancybox({
					maxWidth: 900,
					minWidth: 250
				});

				$('#evento2').fancybox();
			});
		</script>
<?php 
$this->Html->addCrumb('Concursos', '/pages/');

$this->Html->addCrumb("Concursos anteriores", "")

?>
<div class="sidebar">
  <?php echo $this->element('menus/concursos', array('selected' => 1)); ?>
</div>

<div class="content">
	<h2>Ganadores de concursos anteriores</h2>
	<div class="content-winners">
	<h3>Ganadores 2012</h3>
			<div class="wrapper-items" id="wrapper-items">
				<div class="without-results" id="without-results">No se encontraron salas con
						los filtros solicitados</div>
					<ul class="items" id="items">
						<div>
						<li class="item evento1">
							<img src="/img/events/evento1.jpg">
							<div class="slayer">
								<h2 class="title">Cuidadito cuidadito</h2>
								<br>
								<a class="imagenes fancybox" rel="gallery1" href="/img/events/event-gallery-1.jpg" title="Homenaje a María Victoria">Galería</a><br>
								<div class="g" style="display:none">
									<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3824/9041440555_2175b32078_b.jpg" title="Calm Before The Storm (One Shoe Photography Ltd.)">
										<img src="http://farm4.staticflickr.com/3824/9041440555_2175b32078_m.jpg" alt="" />
									</a>
									<a class="fancybox" rel="gallery1" href="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_b.jpg" title="Lambs Valley (JMImagesonline.com)">
										<img src="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_m.jpg" alt="" />
									</a>
									<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_b.jpg" title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))">
										<img src="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_m.jpg" alt="" />
									</a>
								</div>
 							</div>
						</li>
					</div>
					<li>Mejor documental mexicano: Cuates de Australia, de Everardo González</li>

	<p>El Jurado estuvo formalmente constituido por los cineastas Alejandra Sánchez, ganadora del Premio José Rovirosa 2011; Mario Luna y  Carlos Cruz, quienes determinaron por unanimidad entregar el premio  a Cuates de Australia.
	Además La revolución de los alcatraces, de Luciana Kaplan; Lupe el de la vaca, de Blanca Aguerre y Palabras mágicas, de Mercedes Moncada se hicieron acreedores a una mención honorífica. 
	</p>
	<li>Mejor Documental Estudiantil: Mi amiga Bety, de Diana Garay, estudiante del Centro de Capacitación Cinematográfica.</li>
	<p>
	El jurado de la Categoría Mejor Documental Estudiantil, estuvo integrado por los cineastas José Manuel Cravioto, Néstor Sampieri (ganador del Premio Rovirosa 2009) y Mario Viveros, quienes hicieron la entrega de una Mención Honorífica a Las montañas invisibles, de Ángel Linares, alumno del Centro Universitario de Estudios Cinematográficos.
	</p>
				</ul>
	
			</div>
		</div>

		<div class="content-winners">
	
			<div class="wrapper-items" id="wrapper-items">
				<div class="without-results" id="without-results">No se encontraron salas con
						los filtros solicitados</div>
					<ul class="items" id="items">
						<div>
						<li class="item evento1">
							<img src="/img/events/evento1.jpg">
							<div class="slayer">
								<h2 class="title">Cuidadito cuidadito</h2>
								<br>
								<a class="imagenes fancybox" rel="gallery1" href="/img/events/event-gallery-1.jpg" title="Homenaje a María Victoria">Galería</a><br>
								<div class="g" style="display:none">
									<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3824/9041440555_2175b32078_b.jpg" title="Calm Before The Storm (One Shoe Photography Ltd.)">
										<img src="http://farm4.staticflickr.com/3824/9041440555_2175b32078_m.jpg" alt="" />
									</a>
									<a class="fancybox" rel="gallery1" href="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_b.jpg" title="Lambs Valley (JMImagesonline.com)">
										<img src="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_m.jpg" alt="" />
									</a>
									<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_b.jpg" title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))">
										<img src="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_m.jpg" alt="" />
									</a>
								</div>
 							</div>
						</li>
					</div>
					<h3>Ganadores 2011</h3>
					<ul>
					<li>Mejor documental mexicano: Agnus Dei, cordero de Dios, de Alejandra Sánchez.</li>
	<p>
	El Jurado estuvo conformado por los realizadores Busi Cortés, José Ramón Miquelajáuregui y Mitl Valdez.
	</p>
	Obtuvieron mención honorífica: 
	<li>El lugar más pequeño, de Tatiana Hueso.</li> 
	<li>El cielo abierto, de Everardo González.</li> 
	<li>Lecciones para Zafirah, de Carolina Rivas y Daoud Sarhandi.</li>
	<li>Mejor Documental Estudiantil: Y retiemble en sus centros la tierra, de Patricia Martínez.</li>
	<p>
	El jurado fue presidido por Adriana Camacho. Los trabajos acreedores a Mención Honorífica en la categoría Mejor Documental Estudiantil fueron: Tiempo detenido de Marusia Estrada, Días distintos de  David Castañón y Extravíos, dirigida por Adriá Campmany Buisán.
	</p>
		</ul>		
		</ul>

			</div>
		</div>


<div class="content-winners">
			<div class="wrapper-items" id="wrapper-items">
				<div class="without-results" id="without-results">No se encontraron salas con
						los filtros solicitados</div>
					<ul class="items" id="items">
						<div>
						<li class="item evento1">
							<img src="/img/events/evento1.jpg">
							<div class="slayer">
								<h2 class="title">Cuidadito cuidadito</h2>
								<br>
								<a class="imagenes fancybox" rel="gallery1" href="/img/events/event-gallery-1.jpg" title="Homenaje a María Victoria">Galería</a><br>
								<div class="g" style="display:none">
									<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3824/9041440555_2175b32078_b.jpg" title="Calm Before The Storm (One Shoe Photography Ltd.)">
										<img src="http://farm4.staticflickr.com/3824/9041440555_2175b32078_m.jpg" alt="" />
									</a>
									<a class="fancybox" rel="gallery1" href="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_b.jpg" title="Lambs Valley (JMImagesonline.com)">
										<img src="http://farm3.staticflickr.com/2870/8985207189_01ea27882d_m.jpg" alt="" />
									</a>
									<a class="fancybox" rel="gallery1" href="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_b.jpg" title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))">
										<img src="http://farm4.staticflickr.com/3677/8962691008_7f489395c9_m.jpg" alt="" />
									</a>
								</div>
 							</div>
						</li>
					</div>
					<h3>Ganadores 2011</h3>
					<ul>
					<li>Mejor documental mexicano: Agua Tabasco  de Adriana Camacho Torres.</li> 
	<p>
	El Jurado estuvo integrado por Eugenio Polgolvsky, Carlos Mendoza y Everardo González.
	</p>
	<li>Obtuvo mención honorífica: El árbol olvidado José Luis Rincón. </li>
	<li>Mejor Documental Estudiantil: Río Lerma, de Esteban Arragoiz, Gastón Andrade y Estebaliz Márquez.</li>
	<li>Obtuvo mención honorífica: Casa cuna, de Alicia Segovia Juárez.</li>
	</ul>
				</ul>

			</div>
		</div>


	
	</ul>
</div>
