
@section('breadcrumbs')
	<li>
		<a href="/pages/acervo/index">
			Acervo
		</a>
	</li>
	<li class="active">
		Restauración / Historias recuperadas
	</li>
@stop


@section('sidebar')
	@include('elements.menus.acervo', array('selected' => 3))
@stop


@section('content')


	<h1>HISTORIAS RECUPERADAS</h1>

	 <p>Gracias a su trabajo de restauración, la Filmoteca ha logrado mostrar al público la riqueza de una parte de su archivo fílmico, después de haber mejorado notablemente el estado de las copias de películas valiosas para la historia del cine nacional y también de películas restauradas por otros archivos en el extranjero.</p>

	 <p>El proceso de preservación y restauración, no concluye con el salvamento técnico y físico de la obra cinematográfica, es esencial un esfuerzo de divulgación, y en particular de su exhibición. Historias recuperadas presenta con este fin, las obras cinematográficas que por su gran valor histórico han sido rescatadas, restauradas y conservadas en la Filmoteca de la UNAM.</p>
	

      <div class="col-xs-12 col-sm-12">

          <div class="row">

            <div class="col-6 col-sm-6 col-lg-6">
              <h4>LA MANCHA DE SANGRE</h4>
              <img src="/imgs/historias-recuperadas/la-mancha-de-sangre.jpg" class="img-responsive" 'La mancha de sangre'></a>
              <p>Filme perdido durante cincuenta años. El negativo original de nitrato de celulosa lo encontramos maltrecho, incompleto y muy rayado.  Los censores, que durante los años treinta secuestraron el filme y lo mutilaron, no solamente lo cortaron sino que lo manipularon de la peor manera:
              </p>
              <p><a class="btn btn-default" href="/pages/acervo/mancha-de-sangre" role="button">Leer más »</a></p>
            </div><!--/span-->

            <div class="col-6 col-sm-6 col-lg-6">
              <h4>DRÁCULA</h4>
              <img src="/imgs/historias-recuperadas/dracula.jpg" class="img-responsive" 'Drácula'></a>
              <p>Como si fueran objetos inservibles y sin valor comercial, los negativos originales de las películas filmadas en todo el mundo se han perdido con pasmosa facilidad.  Así le sucedió a este filme que se consideró desaparecido hasta principios de los años 90; año en que se localizó una copia de nitrato de celulosa de esta película en Cuba.</p>
              <p><a class="btn btn-default" href="/pages/acervo/dracula" role="button">Leer más »</a></p>
            </div><!--/span-->

            <div class="col-6 col-sm-6 col-lg-6">
              <h4>LÍMITE</h4>
              <img src="/imgs/historias-recuperadas/limite.jpg" class="img-responsive" 'Limite'></a>
				      <p>Varios son los intentos que se han hecho para restaurar este filme. Conocemos, por ejemplo, la versión que fue lanzada en 1978 y exhibida en el Congreso de FIAF en Oaxtepec, Morelos, México, cuyo Simposio llevó como tema “El Cine Olvidado de América Latina”.  Sin embargo, ahora existe otra versión,
			       </p>
              <p><a class="btn btn-default" href="/pages/acervo/limite" role="button">Leer más »</a></p>
            </div><!--/span-->

            <div class="col-6 col-sm-6 col-lg-6">
              <h4>LAS VIÑAS DE LA IRA</h4>
              <img src="/imgs/historias-recuperadas/vinas-de-la-ira.jpg" class="img-responsive" 'Las vñas de la ira'></a>
              <p>Hoy consideramos a John Ford como el mejor director de westerns que ha habido en toda la historia, pero esto no siempre fue así. Desde mediados de los años treinta hasta que los Estados Unidos se involucraron en la Segunda Guerra Mundial, Ford dirigió una serie de dramas sociales que respondían muy puntualmente a la difícil situación por la que atravesaba su país. </p>
              <p><a class="btn btn-default" href="/pages/acervo/vinas-de-la-ira" role="button">Leer más »</a></p>
            </div><!--/span-->

          </div><!--/row-->

        </div><!--/span-->
 


		
@stop
