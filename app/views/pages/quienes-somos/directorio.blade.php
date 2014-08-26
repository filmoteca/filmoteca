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
		Quienes somos
	</a>
</li>
<li class="active">
	Directorio
</li>
@stop





@section('content')

<div class="sidebar">
	@include('elements.menus.quienes-somos', array('selected' => 7))
</div>


<div class="content">
	
	<h3>Directorio</h3> 

	<div class="informacion">
		
		<div id="accordion-resizer" class="ui-widget-content">
			<div id="accordion">
				<h3>Dirección General</h3>
				<div>
					<li>
						<span class="nombre">María Guadalupe Ferrer Andrade</span>
						<br>
						<span class="cargo">Directora General</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 9595
						<br>
						<span class="datos">Fax:</span> 5622 9585
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:gferrer@unam.mx">gferrer@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">Nadina Illescas Villegas</span>
						<br>
						<span class="cargo">Departamento de Enlace Interinstitucional</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 9589 
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:nadina1020@gmail.com">nadina1020@gmail.com</a>
					</li>
					<br>
					<li>
						<span class="nombre">Edgardo Barona Durán</span>
						<br>
						<span class="cargo">Departamento de Análisis y Regularización de la Procedencia del Patrimonio Fílmico de la UNAM</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 8222 ext. 47467 
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:ebarona@unam.mx">ebarona@unam.mx</a>
					</li>
				</div>
				<h3>Subdirección de Rescate y Restauración</h3>
				<div>
					<li id="rescate_restauracion">
						<span class="nombre">Albino Álvarez Gómez</span>
						<br>
						<span class="cargo">Subdirector</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 9584
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
						<span class="datos">Teléfono: </span> 5622 9596
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:"></a>
					</li>
					<br>
					<li>
						<span class="nombre">José Antonio Valencia</span>
						<br>
						<span class="cargo">Taller de Restauración</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 8222 ext. 47495
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:vallopja@unam.mx">vallopja@unam.mx</a>
					</li>
				</div>
				<h3>Subdirección de Preservación y Acervos</h3>
				<div>
					<li id="preservacion_acervos">
						<span class="nombre">Miguel Ángel Recillas</span>
						<br>
						<span class="cargo">Subdirector</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 9588
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:marh@unam.mx"></a>
					</li>
					<br>
					<li>
						<span class="nombre">Nahún Calleros </span>
						<br>
						<span class="cargo">Banco de Imagen</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 9630
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:carriles@unam.mx">carriles@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">Ángel Martínez  </span>
						<br>
						<span class="cargo">Catalogación</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 9582
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:amartin@unam.mx">amartin@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">Antonia Rojas</span>
						<br>
						<span class="cargo">Centro de Documentación</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 4800 ext. 47490
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:antonia@unam.mx">antonia@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">Juan García</span>
						<br>
						<span class="cargo">Bóvedas</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 9586
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:filmbov@unam.mx">filmbov@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">Jesús Brito</span>
						<br>
						<span class="cargo">Producción</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 9587
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:jesusbn@unam.mx">jesusbn@unam.mx</a>
					</li>
				</div>
				<h3>Subdirección de Difusión</h3>
				<div>
					<li id="difusion">
						<span class="nombre">Carmen Carrara </span>
						<br>
						<span class="cargo">Subdirectora</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 9374
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:ccarrara@unam.mx">ccarrara@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">María Luisa Barnés</span>
						<br>
						<span class="cargo">Coordinación de Comunicación</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 4800 ext. 47485
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:malisbarnes@gmail.com">malisbarnes@gmail.com</a>
					</li>
					<br>
					<li>
						<span class="nombre">Doris Morales</span>
						<br>
						<span class="cargo">Prensa</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 4800 ext. 47486
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:dorixmb@unam.mx">dorixmb@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">Carmen Alegría</span>
						<br>
						<span class="cargo">Vinculación</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 9375
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:alegría.c@hotmail.com">alegría.c@hotmail.com</a>
					</li>
					<br>
					<li>
						<span class="nombre">Omar Leobardo Marín</span>
						<br>
						<span class="cargo">Museografía</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 4800 ext. 47488
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:leobardo_marin@hotmail.com">leobardo_marin@hotmail.com</a>
					</li>
					<br>
					<li>
						<span class="nombre">Rosa María Campos</span>
						<br>
						<span class="cargo">Librería y Tienda</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 9496
						<br>
					</li>
				</div>
				<h3>Unidad de Acceso Interinstitucional</h3>
				<div>
					<li id="acceso_interinstitucional">
						<span class="nombre">José Manuel García</span>
						<br>
						<span class="cargo">Jefe de Unidad</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 9597
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:jmgar@unam.mx">jmgar@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">Ignacio Molina</span>
						<br>
						<span class="cargo">Distribución</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 9594
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:distfilm@unam.mx">distfilm@unam.mx</a>
					</li>
				</div>
				<h3>Unidad de Programación</h3>
				<div>
					<li id="programacion">
						<span class="nombre">Ximena Perujo</span>
						<br>
						<span class="cargo">Jefa de Unidad</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 9371
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:ximena@unam.mx">ximena@unam.mx</a>
					</li>
				</div>
				<h3>Coordinación de Nuevas Tecnologías</h3>
				<div>
					<li id="nuevas_tecnologias">
						<span class="nombre">Gerardo león Lastra</span>
						<br>
						<span class="cargo">Coordinador</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 4800 ext. 47473
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:gleonl@unam.mx">gleonl@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">Manuel Comi</span>
						<br>
						<span class="cargo">Área Técnica</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 4800 ext. 47432
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:m.comi.x@unam.mx">m.comi.x@unam.mx</a>
					</li>
				</div>
				<h3>Unidad Administrativa</h3>
				<div>
					<li id="unidad_Administrativa">
						<span class="nombre">Alfredo Gallardo Lugo</span>
						<br>
						<span class="cargo">Jefe de Unidad</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 9583
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:emeliagl@unam.mx">emeliagl@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">Jaqueline Rodríguez</span>
						<br>
						<span class="cargo">Presupuesto</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 9377
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:pavon_jaqueline@hotmail.com">pavon_jaqueline@hotmail.com</a>
					</li>
					<br>
					<li>
						<span class="nombre">Rocío Chávez</span>
						<br>
						<span class="cargo">Personal</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 9372
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:rociocg@unam.mx">rociocg@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">María Eugenia Rojas</span>
						<br>
						<span class="cargo">Bienes y suministros</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 4800 ext. 47475
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:mariaera@unam.mx">mariaera@unam.mx</a>
					</li>
					<br>
					<li>
						<span class="nombre">Irma Álvarez</span>
						<br>
						<span class="cargo">Servicios Generales</span>
						<br>
						<span class="datos">Teléfono: </span> 5622 4800 ext. 47474
						<br>
						<span class="datos">E-mail:</span>
						<a href="mailto:alvairm@unam.mx">alvairm@unam.mx</a>
					</li>
				</div>
			</div>
		</div>

	</ul>
</div>

@stop
