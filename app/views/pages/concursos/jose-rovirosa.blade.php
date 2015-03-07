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
        Concurso José Rovirosa
    </li>
@stop

@section('sidebar')
    @include('elements.menus.concursos', array('selected' => 0))
@stop

@section('content')

    <img src="/imgs/concursos/jose-rovirosa/galardon-rovirosa.jpg" class="img-responsive" 'Concurso José Rovirosa'></a>

    <h1>Premio José Rovirosa</h1>
    <h3>AL MEJOR DOCUMENTAL MEXICANO Y AL MEJOR DOCUMENTAL ESTUDIANTIL</h3>

        <p>Con el propósito de rendir homenaje a la obra docente y cinematográfica del maestro José Rovirosa Macías, destacado cineasta universitario y reconocido promotor del género documental en México,
            en julio de 1997, pocos meses después de su muerte, la Dirección General de Actividades Cinematográficas de la UNAM y el Centro Universitario de Estudios Cinematográficos (CUEC) instauraron el Premio anual José Rovirosa al Mejor Documental Mexicano y en el año 2008 se crea la categoría al Mejor Documental Estudiantil Mexicano.
        </p> <br>

        <p>El Premio José Rovirosa al Mejor Documental Mexicano y Mejor Documental Estudiantil Mexicano pretende estimular la producción del cine documental mexicano, impulsar los trabajos de calidad y ratificar su compromiso con la difusión del cine documental en México, reconocer la labor de quienes han intentado trabajar el campo del documental en nuestro país contra aquellos que nos han hecho creer que el cine es únicamente aquel de ficción y con efectos especiales que se presenta en la mayoría de las salas de exhibición comercial.</p><br>

<div class="row">
    <ul>
        <div class="informacion">
            <div id="accordion-resizer" class="ui-widget-content">  
                <div id="accordion">    
                <h5>¿Quién es José Rovirosa</h5>
                        <div>
                            <p>Nació en Orizaba, Veracruz, en 1934. Estudió en el Centro Universitario de Estudios Cinematográficos (CUEC), donde se desempeñó posteriormente como Secretario Administrativo (1970-1978), Director (1978-1985), Secretario Técnico (1991-1993) y miembro del Comité Editorial (1992-1997), además de profesor titular desde 1972, de diferentes materias, tanto en el CUEC como en el Centro de Capacitación Cinematográfica (CCC) y otras escuelas.</p><br>

                            <p>A lo largo de su carrera realizó 19 documentales, entre los que destacan: <em>Nuestro idioma</em> (1969), <em>Ayautla</em> (1972), <em>Palacio de Minería</em> (1975) y <em>Perdón...investidura</em> (1991), ganador del Ariel de Plata al Mejor Cortometraje de ese año.</p><br>

                            <p>Su personalidad multifacética lo llevó a realizar más de doce guiones cinematográficos, varios de los cuales fueron premiados. Y posteriormente, en un intento por contribuir a la difusión del cine en todas sus vertientes fungió, como Coordinador de cineclubes (1964-1976), Jefe de Producciones Cinematográficas (1967-1970) en el Departamento de Actividades Cinematográficas de la UNAM y Coordinador Nacional de Cineclubes del IMSS, a principios de la década de los años setenta.</p><br>

                            <p>Gracias a su prolífica trayectoria llegó también a desempeñar el cargo de Director de la Casa del Lago (1986-1989) y Secretario Docente en la Escuela Internacional de Cine y Televisión (EICTV) de San Antonio de los Baños, Cuba (1989-1990). Además de realizar diversas colaboraciones en periódicos y revistas, es autor del libro <em>Miradas a la realidad</em>, editado por el CUEC, que contiene entrevistas a documentalistas mexicanos.</p><br>

                            <p>Así mismo, participó en varias instancias e instituciones como la Fundación de Cineastas, la Academia Mexicana de Ciencias y Artes Cinematográficas, entre otras. Y en 1993, José Rovirosa fue distinguido como becario en la categoría de Creadores de Arte en Medios Audiovisuales por el Consejo Nacional para la Cultura y las Artes. En 1997 se instauró en su honor la entrega del <strong>premio José Rovirosa a Mejor documental</strong> y en 2008 se realizó una extensión del premio dando surgimiento al <strong>premio a Mejor Documental Estudiantil</strong>.</p><br>
                        </div>

                <h5>Ganadores 2014</h5>
                    <div>
                        <ul>
                            <img src="/imgs/concursos/jose-rovirosa/rovirosa-2014.jpg" class="img-responsive" 'concurso José Rovirosa 2014'></a>
                            <h5><strong>MEJOR DOCUMENTAL MEXICANO</strong></h5>
                            <h6><strong>PRIMER LUGAR</strong></h6>
                            <li>
                                <span class="nombre">Lejanía</span>
                                <br>
                                <span class="cargo">De: Pablo Tamez</span>
                                <br>
                                <span class="datos">El Jurado determinó por unanimidad otorgarle el premio "Por la sensibilidad y sutileza con la que nos acerca a la compleja vivencia de sus protagonistas, al contar una historia íntima muy dolorosa que nos devela las estructuras de impunidad valiéndose de una cuidada construcción cinematográfica".</span>
                            </li>
                            <h6><strong>MENCIÓN HONORÍFICA</strong></h6>
                            <li>
                                <span class="datos">Este año al jurado le fue imposible otorgar menciones honoríficas, dada la enorme calidad de los trabajos presentados.</span>
                            </li>
                            <h6><strong>JURADO</strong></h6>
                            <li>
                                <span class="datos">Formalmente constituido por los cineastas María del Carmen de Lara, Emiliano Altuna Fistolera y Carlos Rossini (estos dos últimos ganadores del año pasado con el documental <em>El alcalde</em>).</span>
                            </li>
                            <br>
                            <h5><strong>MEJOR DOCUMENTAL ESTUDIANTIL</strong></h5>
                            <h6><strong>PRIMER LUGAR</strong></h6>
                            <li>
                                <span class="nombre">Causar alta</span>
                                <br>
                                <span class="cargo">De: Sara Escobar</span>
                                <br>
                                <span class="datos">“Por el acertado tratamiento narrativo y testimonial para abordar un tema tan delicado y poco explorado como la vida en el Ejército mexicano y los motivos por los cuales los jóvenes se ven obligados a ingresar a sus filas, es decir a causar alta”.</span>
                            </li>
                            <h6><strong>MENCIÓN HONORÍFICA</strong></h6>
                            <li>
                                <span class="nombre">El jefe del desierto</span>
                                <br>
                                <span class="cargo">De: Alejandro Rodríguez Collado</span>
                                <br>
                                <span class="datos">“Por su estética visual y su inspirada narrativa para mostrar la vida de un hombre que vive del desierto”.</span>
                            </li>
                            <br>
                            <li>
                                <span class="nombre">Memín, crónica de un boxeador</span>
                                <br>
                                <span class="cargo">De: Rodrigo Álvarez Flores</span>
                                <br>
                                <span class="datos">“Por la forma en que narra las aspiraciones de un joven al pugilato profesional”.</span>
                            </li>
                            <br>
                            <li>
                                <span class="nombre">Perreus</span>
                                <br>
                                <span class="cargo">De: Kalien Delgado Molina</span>
                                <br>
                                <span class="datos">“Por la manera en que la cámara/visión se convierte en un personaje que convive con un grupo de jóvenes urbanos marginados”.</span>
                            </li>

                            <h6><strong>JURADO</strong></h6>
                            <li>
                                <span class="datos">Formalmente constituido por los cineastas Gloria Ribé, Antonio del Rivero y Omar Guzmán.</span>
                            </li>


                            <br>
                            <span class="datos">Fotos: </span>
                        </ul>
                    </div>

                <h5>Ganadores 2013</h5>
                    <div>
                        <ul>
                             <img src="/imgs/concursos/jose-rovirosa/ganadores-rovirosa2013.jpg" class="img-responsive" 'Ganadores premio José Rovirosa 2013'></a>
                             <h6><strong>PRIMER LUGAR</strong></h6>
                             <h5><strong>MEJOR DOCUMENTAL MEXICANO</strong></h5>
                            <li>
                                <span class="nombre">El alcalde</span>
                                <br>
                                <span class="cargo">De: Federico Rossini, Emiliano Altuna y Diego Enrique Osorno</span>
                                <br>
                                <span class="datos">"Por el inteligente tratamiento cinematográfico para abordar el tema del narcotráfico a través de un personaje polémico como es <em>el alcalde</em>, y por generar en el espectador una reflexión sobre cómo queremos enfrentar este problema".</span>
                            </li>
                            <h6><strong>MENCIÓN HONORÍFICA</strong></h6>
                            <li>
                                <span class="nombre">Rosario</span>
                                <br>
                                <span class="cargo">De: Shula Erenberg</span>
                                <br>
                                <span class="datos">"Por la consistencia con que recupera la memoria que le da la fuerza necesaria a esta luchadora social -Rosario Ibarra de Piedra- para seguir con su larga lucha a fin de que se respeten los derechos de los ciudadanos".</span>
                            </li>
                            <br>
                            <li>
                                <span class="nombre">No hay lugar lejano</span>
                                <br>
                                <span class="cargo">De: Michelle Ibaven</span>
                                <br>
                                <span class="datos">"Por la forma tan inspirada con la que logra que el paisaje físico sirva para exteriorizar las emociones, angustias y aspiraciones de la comunidad y de los diferentes personajes que nos presenta".</span>
                            </li>
                            <br>
                            <h6><strong>JURADO</strong></h6>
                            <li>
                                <span class="datos">Formalmente constituido por los cineastas Alberto Cortés, Rodrigo Herránz y Francisco Ohem.</span>
                            </li>
                            <br>
                            <h5><strong>MEJOR DOCUMENTAL ESTUDIANTIL</strong></h5>
                            <h6><strong>PRIMER LUGAR</strong></h6>
                            <li>
                                <span class="nombre">Osiris y El jarocho</span>
                                <br>
                                <span class="cargo">De: Reneé Peñaloza(Q.E.P.D)</span>
                                <br>
                                <span class="datos">“Por lograr un acercamiento profundo con los personajes y retratar de manera respetuosa una relación en conflicto”.</span>
                                <br>
                                <span class="datos">El premio lo recibieron la señora Guadalupe Galván y el señor Heriberto Peñaloza, padres de Reneé, quienes agradecieron a la UNAM por esta enorme distinción para el trabajo de su hijo y para quien pidieron un minuto de aplausos.</span>
                            </li>
                            <h6><strong>MENCIÓN HONORÍFICA</strong></h6>
                            <li>
                                <span class="nombre">B-boy</span>
                                <br>
                                <span class="cargo">De: Abraham Escobedo</span>
                                <br>
                                <span class="datos">“Por la frescura de su propuesta al presentar personajes interesantes dentro de un contexto poco explorado”.</span>
                            </li>
                            <br>
                            <li>
                                <span class="nombre">La parka</span>
                                <br>
                                <span class="cargo">De: Gabriel Serra</span>
                                <br>
                                <span class="datos">“Por la capacidad de mostrar de manera estética una realidad desoladora”.</span>
                            </li>
                            <br>
                            <li>
                                <span class="nombre">Al fin del desierto</span>
                                <br>
                                <span class="cargo">De: Sheila Altamirano</span>
                                <br>
                                <span class="datos">“Por presentar visiones diferentes de un tema polémico y oportuno”.</span>
                            </li>

                            <h6><strong>JURADO</strong></h6>
                            <li>
                                <span class="datos">Formalmente constituido por los cineastas Luciana Kaplan, Diana Garay (ganadora del Premio Rovirosa 2012) y Luis Rincón.</span>
                            </li>
                            <br>
                            <span class="datos">Fotos: </span>
                        </ul>
                    </div>

                <h5>Ganadores 2012</h5>
                    <div>
                        <ul>
                            <img src="/imgs/concursos/jose-rovirosa/ganadora-rovirosa2012.jpg" class="img-responsive" 'Ganadores premio José Rovirosa 2012'></a>
                            <h5><strong>MEJOR DOCUMENTAL MEXICANO</strong></h5>
                            <h6><strong>PRIMER LUGAR</strong></h6>
                            <li>
                                <span class="nombre">Cuates de Australia</span>
                                <br>
                                <span class="cargo">De: Everardo González</span>
                            </li>
                            <h6><strong>MENCIÓN HONORÍFICA</strong></h6>
                            <li>
                                <span class="nombre">La revolución de los alcatraces</span>
                                <br>
                                <span class="cargo">De: Luciana Kaplan</span>
                            </li>
                            <br>
                            <li>
                                <span class="nombre">Lupe el de la vaca</span>
                                <br>
                                <span class="cargo">De: Blanca Aguerre</span>
                            </li>
                            <br>
                            <li>
                                <span class="nombre">Palabras mágicas</span>
                                <br>
                                <span class="cargo">De: Mercedes Moncada</span>
                            </li>
                            <br>
                            <h6><strong>JURADO</strong></h6>
                            <li>
                                <span class="datos">Formalmente constituido por los cineastas Mario Luna, Carlos Cruz y Alejandra Sánchez (ganadora del Premio José Rovirosa 2011).</span>
                            </li>
                            <br>
                            <h5><strong>MEJOR DOCUMENTAL ESTUDIANTIL</strong></h5>
                            <h6><strong>PRIMER LUGAR</strong></h6>
                            <li>
                                <span class="nombre">Mi amiga Bety</span>
                                <br>
                                <span class="cargo">De: Diana Garay</span>    
                            </li>
                            <h6><strong>MENCIÓN HONORÍFICA</strong></h6>
                            <li>
                                <span class="nombre">Las montañas invisibles</span>
                                <br>
                                <span class="cargo">De: Ángel Linares</span>
                            </li>
                           <br>
                            <h6><strong>JURADO</strong></h6>
                            <li>
                                <span class="datos">Formalmente constituido por los cineastas José Manuel Cravioto, Néstor Sampieri (ganador del Premio Rovirosa 2009) y Mario Viveros.</span>
                            </li>
                            <br>
                            <span class="datos">Fotos: Francisco Suárez</span>
                        </ul>
                    </div>

                <h5>Ganadores 2011</h5>
                    <div>
                        <ul>
                            <img src="/imgs/concursos/jose-rovirosa/ganadores-rovirosa2011.jpg" class="img-responsive" 'Ganadores premio José Rovirosa 2011'></a>
                            <h5><strong>MEJOR DOCUMENTAL MEXICANO</strong></h5>
                            <h6><strong>PRIMER LUGAR</strong></h6>
                            <li>
                                <span class="nombre">Agnus Dei, cordero de Dios</span>
                                <br>
                                <span class="cargo">De: Alejandra Sánchez</span>
                                <br>
                                <span class="datos">"Por revelar con toda la contundencia del cine una realidad vergonzosa que nos atañe a todos; por la valentía con que asume su compromiso contra la impunidad; y por sus valores cinematográficos y narrativos".</span>
                            </li>
                            <h6><strong>MENCIÓN HONORÍFICA</strong></h6>
                            <li>
                                <span class="nombre">El lugar más pequeño</span>
                                <br>
                                <span class="cargo">De: Tatiana Hueso</span>
                            </li>
                            <br>
                            <li>
                                <span class="nombre">El cielo abierto</span>
                                <br>
                                <span class="cargo">De: Everardo González</span>
                            </li>
                            <br>
                            <li>
                                <span class="nombre">Lecciones para Zafirah</span>
                                <br>
                                <span class="cargo">De: Carolina Rivas y Daoud Sarhandi</span>
                            </li>
                            <br>
                            <h6><strong>JURADO</strong></h6>
                            <li>
                                <span class="datos">Formalmente constituido por los realizadores Busi Cortés, José Ramón Miquelajáuregui y Mitl Valdez.</span>
                            </li>
                            <br>
                            <h5><strong>MEJOR DOCUMENTAL ESTUDIANTIL</strong></h5>
                            <h6><strong>PRIMER LUGAR</strong></h6>
                            <li>
                                <span class="nombre">Y retiemble en sus centros la tierra</span>
                                <br>
                                <span class="cargo">De: Patricia Martínez</span>
                                <br>
                                <span class="datos">“Porque a través de la originalidad de su realización, el retrato a profundidad de su protagonista, impecable factura técnica y sorprendente estructura, logra mostrar una metáfora de la educación en México”.</span>    
                            </li>
                            <h6><strong>MENCIÓN HONORÍFICA</strong></h6>
                            <li>
                                <span class="nombre">Tiempo detenido</span>
                                <br>
                                <span class="cargo">De: Marusia Estrada</span>
                                <br>
                                <span class="datos">“Por su profundidad en el retrato de las protagonistas al haber logrado un nivel de intimidad pocas veces visto, mostrando cómo encuentran la libertad al interior de ellas mismas”.</span>
                            </li>
                            <br>
                            <li>
                                <span class="nombre">Días distintos</span>
                                <br>
                                <span class="cargo">De: David Castañón</span>
                                <br>
                                <span class="datos">“Por ser un documental capaz de revelar las complejidades de un personaje a través de un acertado contraste de las distintas facetas de su vida, amalgamadas en una narración visual muy atractiva”.</span>
                            </li>
                            <br>
                            <li>
                                <span class="nombre">Extravíos</span>
                                <br>
                                <span class="cargo">De: Adriá Campmany Buisán</span>
                                <br>
                                <span class="datos">“Por su aguda capacidad de observación que llega a momentos reveladores excepcionales y con una excelente fotografía”.</span>
                            </li>
                            <br>
                            <h6><strong>JURADO</strong></h6>
                            <li>
                                <span class="datos">Formalmente constituido por los cineastas Adriana Camacho, Alejandra Sánchez y Santiago Torres.</span>
                            </li>
                            <br>
                            <span class="datos">Fotos: </span>
                        </ul>
                    </div>

                <h5>Ganadores 2010</h5>
                    <div>
                        <ul>
                            <h5><strong>MEJOR DOCUMENTAL MEXICANO</strong></h5>
                            <h6><strong>PRIMER LUGAR</strong></h6>
                            <li>
                                <span class="nombre">Agua Tabasco</span>
                                <br>
                                <span class="cargo">De: Adriana Camacho Torres</span>
                            </li>
                            <h6><strong>MENCIÓN HONORÍFICA</strong></h6>
                            <li>
                                <span class="nombre">El árbol olvidado</span>
                                <br>
                                <span class="cargo">De: José Luis Rincón</span>
                            </li>
                            <br>
                            <h6><strong>JURADO</strong></h6>
                            <li>
                                <span class="datos">Formalmente constituido por los realizadores Eugenio Polgolvsky, Carlos Mendoza y Everardo González.</span>
                            </li>
                            <br>
                            <h5><strong>MEJOR DOCUMENTAL ESTUDIANTIL</strong></h5>
                            <h6><strong>PRIMER LUGAR</strong></h6>
                            <li>
                                <span class="nombre">Río Lerma</span>
                                <br>
                                <span class="cargo">De: Esteban Arragoiz, Gastón Andrade y Estebaliz Márquez</span>    
                            </li>
                            <h6><strong>MENCIÓN HONORÍFICA</strong></h6>
                            <li>
                                <span class="nombre">Casa cuna</span>
                                <br>
                                <span class="cargo">De: Alicia Segovia Juárez</span>
                            </li>
                            <br>
                            <h6><strong>JURADO</strong></h6>
                            <li>
                                <span class="datos">Formalmente constituido por los realizadores Eugenio Polgolvsky, Carlos Mendoza y Everardo González.</span>
                            </li>
                            <br>
                            <span class="datos">Fotos: </span>
                        </ul>
                    </div>

                <h5>Ganadores 2009</h5>
                    <div>
                        <ul>
                            <h5><strong>MEJOR DOCUMENTAL MEXICANO</strong></h5>
                            <h6><strong>PRIMER LUGAR</strong></h6>
                            <li>
                                <span class="nombre">Los herederos</span>
                                <br>
                                <span class="cargo">De: Eugenio Polgovsky Ezcurra</span>
                                <br>
                                <span class="datos">"Por su búsqueda y encuentro de una dramaturgia documental que sin necesidad de textos es capaz de transmitirnos con fuerza la dolorosa realidad en la que crece y se desarrolla una parte muy importante de la niñez mexicana"; "por su presentación del tema con crudeza no exenta de poesía, que abre espacios simultáneos para la reflexión y la empatía"; "por la compleja producción que se refleja en lo extenso e intenso del material filmado a lo largo y ancho del país" y "por la calidad mostrada en todos los aspectos de la realización y porque es una obra completa, necesaria y valiente".</span>
                            </li>
                            <h6><strong>MENCIÓN HONORÍFICA</strong></h6>
                                <span class="datos">"Por que todos ellos demuestran el tesón, el esfuerzo y el empeño de sus realizadores por testimoniar la complejidad de la realidad mexicana, reforzando con ello, el enorme respeto que muestran hacia la esencia y el espíritu del género documental".</span>
                            <li>
                                <span class="nombre">¡Viva México!</span>
                                <br>
                                <span class="cargo">De: Nicolás Défossé</span>
                            </li>
                            <br>
                             <li>
                                <span class="nombre">El Milagro del Papa</span>
                                <br>
                                <span class="cargo">De: José Luis Valle González</span>
                            </li>
                            <br>
                            <h6><strong>JURADO</strong></h6>
                            <li>
                                <span class="datos">Formalmente constituido por los realizadores Carlos Narro (cineasta), Cristian Calónico (Festival Contra el Silencio todas la Voces) y Jack Lach (cinefotógrafo).</span>
                            </li>
                            <br>
                            <h5><strong>MEJOR DOCUMENTAL ESTUDIANTIL</strong></h5>
                            <h6><strong>PRIMER LUGAR</strong></h6>
                            <li>
                                <span class="nombre">Reforma 18: Trampas del Poder</span>
                                <br>
                                <span class="cargo">De: Néstor Sampieri Laguna</span>
                                <br>
                                <span class="datos">"Por la profundidad de la investigación en un tema de la historia reciente de nuestro país que sigue siendo de lacerante actualidad; por la estupenda estructura que presenta la información en un orden establecido con rigor; por la clara postura del realizador frente a los hechos y por su correcto manejo de los recursos técnicos y expresivos, elementos todos ellos que contribuyen a la construcción de una obra equilibrada y madura".</span>   
                            </li>
                            <h6><strong>MENCIÓN HONORÍFICA</strong></h6>
                            <li>
                                <span class="nombre">Desde niña para siempre</span>
                                <br>
                                <span class="cargo">De: Claudia Hernández López</span>
                            </li>
                            <br>
                            <li>
                                <span class="nombre">Los desposeídos</span>
                                <br>
                                <span class="cargo">De: Emilio Aguilar Pradal</span>
                            </li>
                            <br>
                            <li>
                                <span class="nombre">Sólo un día</span>
                                <br>
                                <span class="cargo">De: Fernando Valencia Castaños</span>
                            </li>

                            <h6><strong>JURADO</strong></h6>
                            <li>
                                <span class="datos">Formalmente constituido por los realizadores Carlos Narro (cineasta), Cristian Calónico (Festival Contra el Silencio todas la Voces) y Jack Lach (cinefotógrafo).</span>
                            </li>
                            <br>
                            <span class="datos">Fotos: </span>
                        </ul>
                    </div>

                <h5>Ganadores 2008</h5>
                    <div>
                        <ul>
                            <h5><strong>MEJOR DOCUMENTAL MEXICANO</strong></h5>
                            <h6><strong>PRIMER LUGAR</strong></h6>
                            <li>
                                <span class="nombre">Trazando Aleida</span>
                                <br>
                                <span class="cargo">De: Christiane Buckhard</span>
                            </li>
                            <br>
                            <h5><strong>MEJOR DOCUMENTAL ESTUDIANTIL</strong></h5>
                            <h6><strong>PRIMER LUGAR</strong></h6>
                            <li>
                                <span class="nombre">Hasta el final</span>
                                <br>
                                <span class="cargo">De: Rubén Montiel</span> 
                            </li>
                        </ul>
                    </div>

                <h5>Ganadores 2007-1997</h5>
                    <div>
                        <ul>
                            <h4>2007</h4>
                            <h5><strong>MEJOR DOCUMENTAL MEXICANO</strong></h5>
                            <li>
                                <span class="nombre">Ladrones viejos</span>
                                <br>
                                <span class="cargo">De: Everardo González</span>
                            </li>
                            <br>
                            <h4>2006</h4>
                            <h5><strong>MEJOR DOCUMENTAL MEXICANO</strong></h5>
                            <li>
                                <span class="nombre">Su nombre es Chavela</span>
                                <br>
                                <span class="cargo">De: Eduardo González Ibarra</span>
                            </li>
                            <br>
                            <h4>2005</h4>
                            <h5><strong>MEJOR DOCUMENTAL MEXICANO</strong></h5>
                            <li>
                                <span class="nombre">Deshilando condenas bordando libertades de Ojo de Agua</span>
                                <br>
                                <span class="cargo">De: Comunicación Indígena</span>
                            </li>
                            <br>
                            <h4>2004</h4>
                            <h5><strong>MEJOR DOCUMENTAL MEXICANO</strong></h5>
                            <li>
                                <span class="nombre">Voces de Guerrero</span>
                                <br>
                                <span class="cargo">De: Homo Videns</span>
                            </li>
                            <br>
                            <h4>2003</h4>
                            <h5><strong>MEJOR DOCUMENTAL MEXICANO</strong></h5>
                            <li>
                                <span class="nombre">Lo que quedó de Pancho</span>
                                <br>
                                <span class="cargo">De: Amir Galván</span>
                            </li>
                            <br>
                            <h4>2002</h4>
                            <h5><strong>MEJOR DOCUMENTAL MEXICANO</strong></h5>
                            <li>
                                <span class="nombre">La cuarta casa, un retrato de Elena Garro</span>
                                <br>
                                <span class="cargo">De: José Antonio Cordero</span>
                            </li>
                            <br>
                            <h4>2001</h4>
                            <h5><strong>MEJOR DOCUMENTAL MEXICANO</strong></h5>
                            <li>
                                <span class="nombre">Pepe Chávez</span>
                                <br>
                                <span class="cargo">De: Busi Cortés</span>
                            </li>
                            <br>
                            <h4>2000</h4>
                            <h5><strong>MEJOR DOCUMENTAL MEXICANO</strong></h5>
                            <li>
                                <span class="nombre">Tierra menonita</span>
                                <br>
                                <span class="cargo">De: Adele Schmidt</span>
                            </li>
                            <br>
                            <h4>1999</h4>
                            <h5><strong>MEJOR DOCUMENTAL MEXICANO</strong></h5>
                            <li>
                                <span class="nombre">Petatera</span>
                                <br>
                                <span class="cargo">De: Carlos Mendoza</span>
                            </li>
                            <br>
                            <h4>1998</h4>
                            <h5><strong>MEJOR DOCUMENTAL MEXICANO</strong></h5>
                            <li>
                                <span class="nombre">Un mexicano en Nueva York</span>
                                <br>
                                <span class="cargo">De: José G. Benítez Muro</span>
                            </li>
                            <br>
                            <li>
                                <span class="nombre">¿Quién diablos es Juliette?</span>
                                <br>
                                <span class="cargo">De: Carlos Markovich</span>
                            </li>
                            <br>
                            <h4>1997</h4>
                            <h5><strong>MEJOR DOCUMENTAL MEXICANO</strong></h5>
                            <li>
                                <span class="nombre">El círculo eterno</span>
                                <br>
                                <span class="cargo">De: Alejandra Islas</span>
                            </li>
                            <br>
                        </ul>
                    </div>

            </div>
      
        </div>  
    </div>
</ul>
</div>

@stop