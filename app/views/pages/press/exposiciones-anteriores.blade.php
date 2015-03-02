
@section('breadcrumbs')
	<li>
		<a href="/pages/acervo/index">
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

    <h2>EXPOSICIONES ANTERIORES</h2>

	       <div class="col-xs-12 col-sm-12">

           <div class="row">

            <div class="col-6 col-sm-6 col-lg-6">
              <h4>EL CINE Y LA REVOLUCIÓN MEXICANA</h4>
              <img src="/imgs/exposiciones/revolucion/exposicion-revolucion1.jpg" class="img-responsive" 'El cine y la revolución mexicana'></a>
              <p>La Revolución Mexicana es uno de los acontecimientos más importantes en la historia de México La Filmoteca de la UNAM alberga un archivo dentro del cual existe una colección que describe a través de imágenes y secuencias la Revolución Mexicana y su impacto.</p>
              <p><a class="btn btn-default" href="/pages/press/exposicion-revolucion" role="button">Leer más »</a></p>
            </div><!--/span-->
            
            <div class="col-6 col-sm-6 col-lg-6">
              <h4>CHIAPAS EN LA CINEMATOGRAFÍA MEXICANA</h4>
              <img src="/imgs/exposiciones/chiapas/exposicion-chiapas1.jpg" class="img-responsive" 'Chiapas en la cinematografía mexicana'></a>
              <p>La Filmoteca de la UNAM celebra la presencia de
              Chiapas en el cine a través de esta exposición compuesta por fotografías y stills,la aportación del gran estado de Chiapas a la cinematografía mexicana.</p>
              <p><a class="btn btn-default" href="/pages/press/exposicion-chiapas" role="button">Leer más »</a></p>
            </div><!--/span-->
            

          </div><!--/row-->
        </div><!--/span-->


@stop