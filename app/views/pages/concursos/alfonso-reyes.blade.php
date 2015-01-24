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
		<a href="/pages/concursos/index">
			Concursos
		</a>
	</li>
	<li class="active">
		Alfonso Reyes "Fósforo"
	</li>
@stop

@section('sidebar')
	@include('elements.menus.concursos', array('selected' => 0))
@stop

@section('content')

	<img src="/imgs/concursos/fosforo/galardon-fosforo.jpg" class="img-responsive" 'Concurso Alfonso Reyes "Fosforo"'></a>

	<h1>Concurso de crítica cinematográfica <em>Alfonso Reyes "Fósforo"</em></h1>

		<p>
		Con el fin de apoyar y promover el trabajo teórico y literario en el ámbito de la cinematografía, la Dirección General de Actividades Cinematográficas, la Dirección de Literatura y la Facultad de Ciencias Políticas y Sociales de la UNAM organiza el concurso de crítica cinematográfica Alfonso Reyes. 
		</p>
		<p>
		<em>"Fósforo" Alfonso Reyes</em> es una iniciativa de la UNAM para contribuir en la formación de una nueva generación de críticos cinematográficos. Debido a ello, el proyecto se desarrolla en el marco de las exhibiciones realizadas en el FICUNAM, en donde se brinda un espacio para la reflexión y el análisis de la formación fílmica de la juventud.  
		</p>
		<p>
		Con este tipo de prácticas se busca brindar apoyo a las personas interesadas en el cine y fomentar el crecimiento de mentes críticas y nuevos talentos en el rubro fílmico. 
		</p>

		<p>Participa!! Consulta la <a href="/pages/concursos/convocatoria-alfonsoreyes"> Convocatoria.</a></p>

	<ul>
		<div class="informacion">
			<div id="accordion-resizer" class="ui-widget-content">	
				<div id="accordion">	
					<h3>¿Quién fué Alfonso Reyes?</h3>
						<div>
							<p><em>"No hay película mala, siempre existirá un 
							claroscuro o una imagen que valga la pena"</em>
							<br>
							Alfonso Reyes
							</p>
							<p>
							Nacido en la ciudad de Monterrey, en el estado de Nuevo León, el 17 de mayo de 1889, Alfonso Reyes, conocido con el mote de "Fósforo" fue un ensayista, crítico y escritor mexicano, pionero de la crítica cinematográfica. 
							</p>
							<p>
							Realizó sus primero estudios en el Liceo Francés en México, El Colegio Civil de Nuevo León, La Escuela Nacional Preparatoria y la Facultad de Derecho de México en donde se tituló como abogado.
							</p>
							<p>
							En 1909 fue cofundador y miembro del Ateneo de la Juventud con Pedro Henríquez Ureña, Antonio Caso, y José Vasconcelos. Un año más tarde publicaría su ópera prima Cuestiones estéticas, y en 1912 fue nombrado secretario de la Escuela Nacional de Altos Estudios, en donde además participó impartiendo la cátedras de Historia de la lengua y Literatura española. En 1913 fue nombrado segundo secretario de la Legación de México en Francia, puesto que desempeñó hasta octubre de 1914.
							</p>
							<p>
							Entre 1914 y 1924 estuvo exiliado en España, en donde comenzaría la época más fructífera de su carrera y también daría inicio a una nueva  vertiente literaria en la que se conjugaba la visión crítica y literaria para el género cinematográfico.
							</p>
							<p>
							Desde luego Reyes, escritor multifacético, se desenvolvió en un sinfín de trabajos y puestos diplomáticos y artísticos; sin embargo, su aportación más significativa en el ámbito fílmico daría inicio en el verano de 1915, en España, cuando comenzara la redacción de una columna semanal para el Semanario España, dando origen  a la crítica cinematográfica en idioma castellano. 
							</p>
							<p>
							Después de una fructífera carrera que le brindó el reconocimiento de otras grandes figuras de la literatura como el mismo Jorge Luis Borges, Alfonso Reyes falleció  el 27 de diciembre de 1959 a la edad de 70 años dejando un legado analítico y literario que hasta la fecha no ha sido superado. 
							</p>
							<br>
						</div>

					<h3>Ganadores 4º Concurso - 2014</h3>
						<div>
							<ul>
								<h5><strong>CATEGORÍA BACHILLERATO</strong></h5>
								<img src="/imgs/concursos/fosforo/premiacion-fosforo2014.jpg" class="img-responsive" 'Premiación concurso Alfonso Reyes "Fósforo" 2014'></a>
								<h6><strong>PRIMER LUGAR</strong></h6>
								<img src="/imgs/concursos/fosforo/2014/categoria-bachillerato.jpg" class="img-responsive" 'Primer lugar categoría Bachillerato'></a>
								<li>
									<span class="nombre">Adriana Maldonado Montelongo</span>
									<br>
									<span class="cargo">Título: <a href="http://www.puntodepartida.unam.mx/index.php?option=com_content&task=view&id=1568&Itemid=1" target="_blank"><em>El grito silente de Ituzaingó</em></a></span>
									<!-- <span class="cargo">Título: <em>El grito silente de Ituzaingó</em></span> -->
									<br>
									<span class="datos">Escuela: CCH Azcapotzalco</span>
								</li>
								<br>

								<h5><strong>CATEGORÍA LICENCIATURA</strong></h5>
								<h6><strong>PRIMER LUGAR</strong></h6>
								<img src="/imgs/concursos/fosforo/2014/categoria-licenciatura.jpg" class="img-responsive" 'Primer lugar categoría Licenciatura'></a>
								<li>
									<span class="nombre">Adalberto Pagola Santiago</span>
									<br>
									<span class="cargo">Título: <a href="http://www.puntodepartida.unam.mx/index.php?option=com_content&task=view&id=1571&Itemid=1" target="_blank"><em>P3ND3JO5: la juventud desde Perrone</em></a></span>
									<!-- <span class="cargo">Título: <em>P3ND3JO5: la juventud desde Perrone</em></span> -->
									<br>
									<span class="datos">Escuela: Facultad de Filosofía y Letras</span>
								</li>
								<br>

								<h5><strong>CATEGORÍA LICENCIATURA</strong></h5>
								<h6><strong>MENCIÓN HONORÍFICA</strong></h6>
								<img src="/imgs/concursos/fosforo/2014/categoria-mencion-honorifica.jpg" class="img-responsive" 'Mención honorífica categoría Licenciatura'></a>
								<li>
									<span class="nombre">Carlos Amado Cabrales Quintana</span>
									<br>
									<span class="cargo">Título: <em>Oda al vacío</em></span>
									<br>
									<span class="datos">Escuela: Facultad de Artes y Diseño</span>
								</li>
								<br>

								<h5><strong>CATEGORÍA EX-ALUMNOS</strong></h5>
								<h6><strong>PRIMER LUGAR</strong></h6>
								<img src="/imgs/concursos/fosforo/2014/categoria-ex-alumnos.jpg" class="img-responsive" 'Primer lugar categoría Ex-alumnos'></a>
								<li>
									<span class="nombre">Jorge Luis Tercero Alvizo</span>
									<br>
									<span class="cargo">Título: <a href="http://www.puntodepartida.unam.mx/index.php?option=com_content&task=view&id=1575&Itemid=1#*" target="_blank"><em>El lugar del hijo: fantasía activista-social sobre la muerte de un padre kafkiano</em></a></span>
									<!-- <span class="cargo">Título: <em>El lugar del hijo: fantasía activista-social sobre la muerte de un padre kafkiano</em></span> -->
									<br>
									<span class="datos">Escuela: Facultad de Filosofía y Letras</span>
								</li>
								<br>

								<h5><strong>CATEGORÍA EX-ALUMNOS</strong></h5>
								<h6><strong>MENCIÓN HONORÍFICA</strong></h6>
								<!-- {{ HTML::image("/imgs/concursos/fosforo/2014/.jpg",'Mención honorífica categoría Ex-alumnos') }} -->
								<li>
									<span class="nombre">Lizbeth Aída Palomo</span>
									<br>
									<span class="cargo">Título: <em>Ladran Sancho, señal que cabalgamos</em></span>
									<br>
									<span class="datos">Escuela: Facultad de Ciencias Políticas y Sociales</span>
								</li>
								<br>
								<h5><strong>JURADO</strong></h5>
								<img src="/imgs/concursos/fosforo/2014/jurado.jpg" class="img-responsive" 'Jurado concurso 4º Concurso de crítica cinematográfica Alfonso Reyes "Fósforo"'></a>
								<li>
									<br>
									<span class="datos">El Jurado estuvo conformado por: Juncia Avilés, Francisco Peredo, María José Secco, Roger Koza, Luis Vaca</span>
								</li>
								<br>
								<span class="datos">Fotos: Verónica Rosales</span>
							</ul>
						</div>

					<h3>Ganadores 3er. Concurso -2013</h3>
						<div>
							<ul>
								<h5><strong>CATEGORÍA BACHILLERATO</strong></h5>
								<img src="/imgs/concursos/fosforo/premiacion-fosforo2013.jpg" class="img-responsive" 'Premiación concurso Alfonso Reyes "Fósforo" 2013'></a>
								<h6><strong>PRIMER LUGAR</strong></h6>
								<li>
									<span class="nombre">Carlos Axel Fernández Delie</span>
									<br>
									<span class="cargo">Título: <a href="http://www.puntodepartida.unam.mx/index.php?option=com_content&task=view&id=1481&Itemid=1" target="_blank"><em>Ensayo de crítica cinematográfica sobre la película Mitote</em></a></span>
									<!-- <span class="cargo">Título: <em>El grito silente de Ituzaingó</em></span> -->
									<br>
									<span class="datos">Escuela: ENP N.2 "Erasmo Castellanos Quinto"</span>
								</li>
								<br>

								<h5><strong>CATEGORÍA LICENCIATURA</strong></h5>
								<h6><strong>PRIMER LUGAR</strong></h6>
								<li>
									<span class="nombre">Luis Fernando Cuervo Laffaye</span>
									<br>
									<span class="cargo">Título: <a href="http://www.puntodepartida.unam.mx/index.php?option=com_content&task=view&id=1485&Itemid=1" target="_blank"><em>Tokio Stories</em></a></span>
									<!-- <span class="cargo">Título: <em>P3ND3JO5: la juventud desde Perrone</em></span> -->
									<br>
									<span class="datos">Escuela: Facultad de Filosofía y Letras</span>
								</li>
								<br>

								<h5><strong>CATEGORÍA LICENCIATURA</strong></h5>
								<h6><strong>MENCIÓN HONORÍFICA</strong></h6>
								<li>
									<span class="nombre">Carlos Enrique Maldonado Martínez</span>
									<br>
									<span class="cargo">Título: <em>Nuevos ritos</em></span>
									<br>
								</li>
								<br>
								<li>
									<span class="nombre">Jessica Adriana Funes Juárez</span>
									<br>
									<span class="cargo">Título: <em>Del amor posmoderno y otras chucherías</em></span>
									<br>
								</li>
								<br>
								<li>
									<span class="nombre">Víctor Hugo Ramírez Ballesteros </span>
									<br>
									<span class="cargo">Título: <em>La humedad del síntoma fantasma</em></span>
									<br>
								</li>
								<br>

								<h5><strong>CATEGORÍA EX-ALUMNOS</strong></h5>
								<h6><strong>PRIMER LUGAR</strong></h6>
								<li>
									<span class="nombre">David Alberto Becerril Hernández</span>
									<br>
									<span class="cargo">Título: <a href="http://www.puntodepartida.unam.mx/index.php?option=com_content&task=view&id=1480&Itemid=1" target="_blank"><em>Las tragicomedias del somos o nos hacemos</em></a></span>
									<br>
									<span class="datos">Escuela: Facultad de Derecho</span>
								</li>
								<br>

								<h5><strong>CATEGORÍA EX-ALUMNOS</strong></h5>
								<h6><strong>MENCIÓN HONORÍFICA</strong></h6>
								<li>
									<span class="nombre">Carlos Gasca</span>
									<br>
									<span class="cargo">Título: <em>En el pasado está la esperanza</em></span>
									<br>
								</li>
								<br>
								<li>
									<span class="nombre">Isaías López Tejeda</span>
									<br>
									<span class="cargo">Título: <em>Y las máscaras lloran</em></span>
									<br>
								</li>
								<br>
								<li>
									<span class="nombre">Luis Armando Chávez</span>
									<br>
									<span class="cargo">Título: <em>Mitote, mazacote: ¡México!</em></span>
									<br>
								</li>
								<br>

								<h5><strong>CATEGORÍA POSGRADO</strong></h5>
								<h6><strong>PRIMER LUGAR</strong></h6>
								<li>
									<span class="nombre">Elizabeth Teresita Guzmán Martínez</span>
									<br>
									<span class="cargo">Título: <a href="http://www.puntodepartida.unam.mx/index.php?option=com_content&task=view&id=1482&Itemid=1" target="_blank"><em>No haces más que sufrir</em></a></span>
									<br>
									<span class="datos">Escuela: Facultad de Economía</span>
								</li>
								<br>

								<h5><strong>JURADO</strong></h5>

								<li>
									<br>
									<span class="datos">El jurado estuvo conformado por: Gabriel Rodríguez, Iván Farías, Lourdes Roca, Monserrat Algarabel, Ricardo Téllez y Roger Koza.</span>
								</li>

							</ul>
						</div>

					<h3>Ganadores 2º Concurso - 2012</h3>
						<div>
							<ul>
								<h5><strong>CATEGORÍA BACHILLERATO</strong></h5>
								<img src="/imgs/concursos/fosforo/premiacion-fosforo2012.jpg" class="img-responsive" 'Premiación concurso Alfonso Reyes "Fósforo" 2012'></a>
								<h6><strong>PRIMER LUGAR</strong></h6>
								<li>
									<span class="nombre">Saúl Florentino Sánchez Lovera</span>
									<br>
									<span class="cargo">Título: <a href="http://www.puntodepartida.unam.mx/index.php?option=com_content&task=view&id=1366&Itemid=1" target="_blank"><em>Postales de la destrucción</em></a></span>
									<br>
									<span class="datos">Instituto Educativo Olinca"</span>
								</li>
								<br>

								<h5><strong>CATEGORÍA LICENCIATURA</strong></h5>
								<h6><strong>PRIMER LUGAR</strong></h6>
								<li>
									<span class="nombre">Rubén Hernández Duarte</span>
									<br>
									<span class="cargo">Título: <a href="http://www.puntodepartida.unam.mx/index.php?option=com_content&view=article&id=1364%3Alas-geometr-del-desencuentro-rubhernez&catid=872%3Acrca-cinematogrca-fro-2012&Itemid=1" target="_blank"><em>De jueves a domingo o las geometrías del (des) encuentro</em></a></span>
									<br>
									<span class="datos">Escuela: Facultad de Ciencias Políticas y Sociales</span>
								</li>
								<br>

								<h5><strong>CATEGORÍA LICENCIATURA</strong></h5>
								<h6><strong>MENCIÓN HONORÍFICA</strong></h6>
								<li>
									<span class="nombre">Iván Aguirre</span>
									<br>
									<span class="cargo">Título: <em>El malestar tropical de Chantal</em></span>
									<br>
								</li>
								<br>

								<h5><strong>CATEGORÍA EX-ALUMNOS</strong></h5>
								<h6><strong>PRIMER LUGAR</strong></h6>
								<li>
									<span class="nombre">Julián Pensamiento por la crítica Martínez</span>
									<br>
									<span class="cargo">Título: <a href="http://www.puntodepartida.unam.mx/index.php?option=com_content&view=article&id=1362%3Auna-road-movie-intimista-julipensamiento&catid=872%3Acrca-cinematogrca-fro-2012&Itemid=1" target="_blank"><em>De jueves a domingo: un road movie</em></a></span>
									<br>
									<span class="datos">Escuela: Centro Universitario de Estudios Cinematográficos</span>
								</li>
								<br>

								<h5><strong>CATEGORÍA EX-ALUMNOS</strong></h5>
								<h6><strong>MENCIÓN HONORÍFICA</strong></h6>
								<li>
									<span class="nombre">Claudia Navarro Elizalde</span>
									<br>
									<span class="cargo">Título: <em>La vida es un capricho</em></span>
									<br>
								</li>
								<br>

								<h5><strong>CATEGORÍA POSGRADO</strong></h5>
								<h6><strong>PRIMER LUGAR</strong></h6>
								<li>
									<span class="nombre">César Bárcenas Curtis</span>
									<br>
									<span class="cargo">Título: <a href="http://www.puntodepartida.unam.mx/index.php?option=com_content&view=article&id=1358%3Abifurcaciones-cr-benas&catid=872%3Acrca-cinematogrca-fro-2012&Itemid=1" target="_blank"><em>Bifurcaciones</em></a></span>
									<br>
									<span class="datos">Escuela: Facultad de Ciencias Políticas y Sociales</span>
								</li>
								<br>

								<h5><strong>CATEGORÍA POSGRADO</strong></h5>
								<h6><strong>MENCIÓN HONORÍFICA</strong></h6>
								<li>
									<span class="nombre">Gabriela Inés Torres Vigil </span>
									<br>
									<span class="cargo">Título: <em>Sangre de mi sangre: el camino hacia el sacrificio</em></span>
									<br>
								</li>
								<br>

								<h5><strong>JURADO</strong></h5>

								<li>
									<br>
									<span class="datos">El jurado estuvo conformado por: Arturo Guillemaud Rodríguez, Lic. Fernando Macotela, Francisco Ohem, Roger Koza.</span>
								</li>

							</ul>
						</div>
						
					<h3>Ganadores 1er. Concurso - 2011</h3>
						<div>
							<ul>
								<h5><strong>CATEGORÍA BACHILLERATO</strong></h5>
								<h6><strong>PRIMER LUGAR</strong></h6>
								<li>
									<span class="nombre">Tochtli Von Roehrich Vassallo</span>
									<br>
									<span class="cargo">Título: <a href="http://www.puntodepartida.unam.mx/index.php?option=com_content&task=view&id=1218&Itemid=1" target="_blank"><em>Aquí y en Corea</em></a></span>
									<br>
									<span class="datos">CCH plantel Sur"</span>
								</li>
								<br>

								<h5><strong>CATEGORÍA LICENCIATURA</strong></h5>
								<h6><strong>PRIMER LUGAR</strong></h6>
								<li>
									<span class="nombre">Sergio R. Bárcenas Huidobro</span>
									<br>
									<span class="cargo">Título: <a href="http://www.puntodepartida.unam.mx/index.php?option=com_content&task=view&id=1215&Itemid=1" target="_blank"><em>Un verso muerto va flotando en el río</em></a></span>
									<br>
									<span class="datos">Escuela: Facultad de Ciencias Políticas y Sociales</span>
								</li>
								<br>

								<h5><strong>CATEGORÍA LICENCIATURA</strong></h5>
								<h6><strong>MENCIÓN HONORÍFICA</strong></h6>
								<li>
									<span class="nombre">Ricardo García Cardos</span>
									<br>
									<span class="cargo">Título: <em>El destino del héroe</em></span>
									<br>
								</li>
								<br>

								<h5><strong>CATEGORÍA EX-ALUMNOS</strong></h5>
								<h6><strong>PRIMER LUGAR</strong></h6>
								<li>
									<span class="nombre">Julián Pensamiento Martínez</span>
									<br>
									<span class="cargo">Título: <a href="http://www.puntodepartida.unam.mx/index.php?option=com_content&task=view&id=1222&Itemid=1" target="_blank"><em>Rafi pitts, el cazador furtivo perseguido</em></a></span>
									<br>
									<span class="datos">Escuela: Centro Universitario de Estudios Cinematográficos</span>
								</li>
								<br>

								<h5><strong>CATEGORÍA POSGRADO</strong></h5>
								<h6><strong>PRIMER LUGAR</strong></h6>
								<li>
									<span class="nombre">Juan Gabriel Solís Ortega</span>
									<br>
									<span class="cargo">Título: <a href="http://www.puntodepartida.unam.mx/index.php?option=com_content&task=view&id=1223&Itemid=1" target="_blank"><em>The Thunder, la explosiva estrategia del silencio</em></a></span>
									<br>
									<span class="datos">Escuela: Facultad de Filosofía y Letras</span>
								</li>
								<br>

								<h5><strong>CATEGORÍA POSGRADO</strong></h5>
								<h6><strong>MENCIÓN HONORÍFICA</strong></h6>
								<li>
									<span class="nombre">Rodrigo Martínez Martínez</span>
									<br>
									<span class="cargo">Título: <em>El cazador</em></span>
									<br>
								</li>
								<br>

								<h5><strong>JURADO</strong></h5>

								<li>
									<br>
									<span class="datos">El jurado estuvo conformado por: 					</li>

							</ul>
						</div>

				</div>
			
			</div>	
		</div>
	</ul>


@stop
