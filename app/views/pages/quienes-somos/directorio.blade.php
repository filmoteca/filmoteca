@section('scripts')
{{ HTML::scripts(array(
	'/bower_components/jqueryui/ui/minified/jquery.ui.core.min.js',
	'/bower_components/jqueryui/ui/minified/jquery.ui.widget.min.js',
	'/bower_components/jqueryui/ui/minified/jquery.ui.accordion.min.js',
	'/assets/js/static-pages/directorio.js')) }}
@stop

@section('styles')
{{ HTML::styles(array(
	'/bower_components/jqueryui/themes/smoothness/jquery-ui.css',
	'/bower_components/jqueryui/themes/smoothness/jquery.ui.theme.css')) }}
@stop





@section('breadcrumbs')
<li>
	<a href="/pages/quienes-somos/index">
		Quiénes somos
	</a>
</li>
<li class="active">
	Directorio
</li>
@stop





@section('sidebar')
	@include('elements.menus.quienes-somos', array('selected' => 7))
@stop


@section('content')
	
	<h1>Directorio</h1> 
	<p>La <b>Dirección General de Actividades Cinematográficas - Filmoteca de la UNAM</b> se localiza en Circuito Exterior Mtro. Mario de la Cueva s/n, en Ciudad Universitaria. En sus instalaciones se resguarda y preserva el acervo filmográfico de la UNAM.
	<p>Esta dependencia universitaria desarrolla sus labores a través de las siguientes áreas:</p>
</p>
<div class="row">
<ul>
	<div class="informacion">
	
		<div id="accordion-resizer" class="ui-widget-content">
			
			<div id="accordion">
				<h5>Dirección General</h5>
				<div>
					<li>
						<span class="nombre">María Guadalupe Ferrer Andrade</span>
						<br>
						<span class="cargo">Directora General</span>
						<br>
						<span class="datos">Teléfono: 5622 9595</span>
						<br>
						<span class="datos">Fax: 5622 9585</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:gferrer@unam.mx">gferrer@unam.mx</a>
					</li>
				</div>
				<h5>Subdirección de Rescate y Restauración</h5>
				<div>
					<li>
						<span class="datos">Coordina las labores relacionadas con el análisis del estado físico de las películas, su reparación y reproducción en materiales contemporáneos para su exhibición; para ello cuenta con el apoyo de las áreas de Laboratorio cinematográfico y Taller de restauración.</span>
					</li>
					<br>
					<li id="rescate_restauracion">
						<span class="nombre">Albino Álvarez Gómez</span>
						<br>
						<span class="cargo">Subdirector</span>
						<br>
						<span class="datos">Teléfono: 5622 9584</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:algoal57@unam.mx">algoal57@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">Francisco Ramírez Vázquez</span>
						<br>
						<span class="cargo">Laboratorio Cinematográfico</span>
						<br>
						<span class="datos">Teléfono: 5622 9596</span>
						<br>
						<span class="datos">E-mail: </span>
						<a href="mailto: fco_ramirez@unam.mx">fco_ramirez@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">José Antonio Valencia</span>
						<br>
						<span class="cargo">Taller de Restauración</span>
						<br>
						<span class="datos">Teléfono: 5622 8222 ext. 47495</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:vallopja@unam.mx">vallopja@unam.mx</a>
					</li>
				</div>
				<h5>Subdirección de Acervos</h5>
				<div>
					<li>
						<span class="datos">Su función principal es el manejo, organización y conservación del acervo filmográfico y de materiales impresos. Coordina las siguientes áreas: Banco de imagen, Bóvedas, Catalogación, Centro de Documentación y Producción.</span>
					</li>
					<br>
					<li id="preservacion_acervos">
						<span class="nombre">Miguel Ángel Recillas Herrera</span>
						<br>
						<span class="cargo">Subdirector</span>
						<br>
						<span class="datos">Teléfono: 5622 9588</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:marh@unam.mx">marh@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">Nahún Calleros Carriles</span>
						<br>
						<span class="cargo">Banco de Imagen</span>
						<br>
						<span class="datos">Teléfono: 5622 9630</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:carriles@unam.mx">carriles@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">Juan García Hernández</span>
						<br>
						<span class="cargo">Bóvedas</span>
						<br>
						<span class="datos">Teléfono: 5622 9586</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:filmbov@unam.mx">filmbov@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">Ángel Martínez Juárez</span>
						<br>
						<span class="cargo">Catalogación</span>
						<br>
						<span class="datos">Teléfono: 5622 9582</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:amartin@unam.mx">amartin@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">Antonia Rojas Ávila</span>
						<br>
						<span class="cargo">Centro de Documentación</span>
						<br>
						<span class="datos">Teléfono: 5622 4800 ext. 47490</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:antonia@unam.mx">antonia@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">Jesús Brito Nájera</span>
						<br>
						<span class="cargo">Producción</span>
						<br>
						<span class="datos">Teléfono: 5622 9587</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:jesusbn@unam.mx">jesusbn@unam.mx</a>
					</li>
				</div>
				<h5>Subdirección de Difusión</h5>
				<div>
					<li>
						<span class="datos">Su función es difundir las actividades que realiza la Filmoteca, así como organizar las exposiciones, cursos y edición de libros.  A su cargo esta la Coordinación de Comunicación, el Departamento de Vinculación, así como las áreas de Museología, Prensa y la Librería y tienda.</span>
					</li>
					<br>
					<li id="difusion">
						<span class="nombre">Carmen Carrara y García</span>
						<br>
						<span class="cargo">Subdirectora</span>
						<br>
						<span class="datos">Teléfono: 5622 9374</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:ccarrara@unam.mx">ccarrara@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">María Luisa Barnés Regueiro</span>
						<br>
						<span class="cargo">Coordinación de Comunicación</span>
						<br>
						<span class="datos">Teléfono: 5622 4800 ext. 47485</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:malisbarnes@gmail.com">malisbarnes@gmail.com</a>
					</li>
					<br>
					<li>
						<span class="nombre">Doris Morales Bautista</span>
						<br>
						<span class="cargo">Prensa</span>
						<br>
						<span class="datos">Teléfono: 5622 4800 ext. 47486</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:dorixmb@unam.mx">dorixmb@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">Carmen Alegría Pérez</span>
						<br>
						<span class="cargo">Vinculación</span>
						<br>
						<span class="datos">Teléfono: 5622 9375</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:alegría.c@hotmail.com">alegría.c@hotmail.com</a>
					</li>
					<br>
					<li>
						<span class="nombre">Omar Leobardo Marín Vergara</span>
						<br>
						<span class="cargo">Museografía</span>
						<br>
						<span class="datos">Teléfono: 5622 4800 ext. 47488</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:leobardo_marin@hotmail.com">leobardo_marin@hotmail.com</a>
					</li>
					<br>
					<li>
						<span class="nombre">Rosa María González Campos</span>
						<br>
						<span class="cargo">Librería y Tienda</span>
						<br>
						<span class="datos">Teléfono: 5622 9496</span>
						<br>
					</li>
				</div>
				<h5>Unidad de Acceso Interinstitucional</h5>
				<div>
					<li>
						<span class="datos">Se encarga del servicio de préstamo y alquiler de películas del acervo de la Filmoteca, para su exhibición dentro y fuera de la UNAM, así como para el Servicio Exterior Mexicano. Coordina el departamento de Distribución.</span>
					</li>
					<br>
					<li id="acceso_interinstitucional">
						<span class="nombre">José Manuel García Ortega</span>
						<br>
						<span class="cargo">Jefe de Unidad</span>
						<br>
						<span class="datos">Teléfono: 5622 9597</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:jmgar@unam.mx">jmgar@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">Ignacio Molina Moysen</span>
						<br>
						<span class="cargo">Distribución</span>
						<br>
						<span class="datos">Teléfono: 5622 9594</span> 
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:distfilm@unam.mx">distfilm@unam.mx</a>
					</li>
					<li>
						<span class="nombre">Jorge Sánchez González</span>
						<br>
						<span class="cargo">Programación</span>
						<br>
						<span class="datos">Teléfono: 5622 9497</span> 
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:jorceti1@unam.mx">jorceti1@unam.mx</a>
					</li>
				</div>
				<h5>Unidad de Programación</h5>
				<div>
					<li>
						<span class="datos">Su principal actividad es organizar y programar funciones, ciclos de cine en las salas Julio Bracho, José Revueltas y Carlos Monsiváis del Centro Cultural Universitario y en el Cinematógrafo del Chopo de la UNAM, también participa con los festivales de cine que se realizan en México y en el extranjero. Se encarga también del registro de cineclubes universitarios.</span>
					</li>
					<br>
					<li id="programacion">
						<span class="nombre">Ximena Perujo Cano</span>
						<br>
						<span class="cargo">Jefa de Unidad</span>
						<br>
						<span class="datos">Teléfono: 5622 9371</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:ximena@unam.mx">ximena@unam.mx</a>
					</li>
				</div>
				<h5>Coordinación de Nuevas Tecnologías</h5>
				<div>
					<li>
						<span class="datos">Su función principal es mantener al día en las tecnologías de la información y la comunicación los sistemas y la infraestructura de la red de la Filmoteca, así como administrar las bases de datos y dar soporte técnico a los servidores y a los equipos del personal de la dependencia, además de desarrollar nuevos sistemas para apoyo de áreas específicas. En colaboración con la Subdirección de Difusión, y de Becarios y Servicio social creó el portal de Cine en Línea y el Museo Virtual de Aparatos Cinematográficos con la finalidad de difundir el acervo de la Filmoteca y resaltar su importancia para la cinematografía nacional y mundial.</span>
					</li>
					<br>
					<li id="nuevas_tecnologias">
						<span class="nombre">Gerardo León Lastra</span>
						<br>
						<span class="cargo">Coordinador</span>
						<br>
						<span class="datos">Teléfono: 5622 4800 ext. 47473</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:gleonl@unam.mx">gleonl@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">Manuel Comi Xolot</span>
						<br>
						<span class="cargo">Área Técnica</span>
						<br>
						<span class="datos">Teléfono: 5622 4800 ext. 47432</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:m.comi.x@unam.mx">m.comi.x@unam.mx</a>
					</li>
				</div>
				<h5>Unidad Administrativa</h5>
				<div>
					<li>
						<span class="datos">Cumple con la tarea distribuir y operar los recursos financieros y materiales así como el patrimonio de esta dependencia. Para ello cuenta con el apoyo de los departamentos de Presupuesto, Personal, Bienes y suministros y Servicios Generales.</span>
					</li>
					<br>
					<li id="unidad_Administrativa">
						<span class="nombre">Alfredo Gallardo Lugo</span>
						<br>
						<span class="cargo">Jefe de Unidad</span>
						<br>
						<span class="datos">Teléfono: 5622 9583</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:emeliagl@unam.mx">emeliagl@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">Jaqueline Rodríguez Pavón</span>
						<br>
						<span class="cargo">Presupuesto</span>
						<br>
						<span class="datos">Teléfono: 5622 9377</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:pavon_jaqueline@hotmail.com">pavon_jaqueline@hotmail.com</a>
					</li>
					<br>
					<li>
						<span class="nombre">Rocío Chávez Germán</span>
						<br>
						<span class="cargo">Personal</span>
						<br>
						<span class="datos">Teléfono: 5622 9372</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:rociocg@unam.mx">rociocg@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">María Eugenia Rojas Ávila</span>
						<br>
						<span class="cargo">Bienes y suministros</span>
						<br>
						<span class="datos">Teléfono: 5622 4800 ext. 47475</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:mariaera@unam.mx">mariaera@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">Irma Álvarez Arroyo</span>
						<br>
						<span class="cargo">Servicios Generales</span>
						<br>
						<span class="datos">Teléfono: 5622 4800 ext. 47474</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:alvairm@unam.mx">alvairm@unam.mx</a>
					</li>
				</div>
					<h5>Enlace y relaciones interinstitucionales</h5>
				<div>
					<li>
						<span class="datos">Su función es organizar, coadyuvar y dar seguimiento a las actividades concernientes a los Cuerpos Colegiados de la DGAC, universitarios y externos, organizar seminarios con instancias académicas y culturales y con invitados internacionales, que se imparten a alumnos y profesores universitarios, coordinar el Programa de Becarios y Servicio Social, así como las Visitas guiadas a las diversas áreas de la dependencia.</span>
					</li>
					<br>
					<li>
						<span class="nombre">Nadina Illescas Villegas</span>
						<br>
						<span class="cargo">Departamento de Enlace y relaciones Interinstitucionales</span>
						<br>
						<span class="datos">Teléfono: 5622 9589</span>
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:nadina1020@gmail.com">nadina1020@gmail.com</a>
					</li>
				</div>
					<h5>Departamento de Análisis y Regularización de la Procedencia del Patrimonio Fílmico de la UNAM</h5>
				<div>
					<li>
						<span class="datos">Su principal función es establecer con certeza la titularidad y/o propiedad de derechos morales y patrimoniales de las obras cinematográficas que conforman el acervo de la Filmoteca de la UNAM.</span>
					</li>
					<br>
					<li>
						<span class="nombre">Edgardo Barona Durán</span>
						<br>
						<span class="cargo">Departamento de Análisis y Regularización de la Procedencia del Patrimonio Fílmico de la UNAM</span>
						<br>
						<span class="datos">Teléfono: 5622 8222 ext. 47467</span>  
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:ebarona@unam.mx">ebarona@unam.mx</a>
					</li>
				</div>
			</div>
		
		</div>	
	</div>
</ul>
</div>

@stop
