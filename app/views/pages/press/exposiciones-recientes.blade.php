
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

    <h2>EXPOSICIONES RECIENTES</h2>

	       <div class="col-xs-12 col-sm-12">

           <div class="row">

            <div class="col-6 col-sm-6 col-lg-6">
              <h4>EL CINE FRANCÉS CON LOS FOTÓGRAFOS DE MAGNUM</h4>
              <img src="/imgs/exposiciones/magnum/exposicion-magnum1.jpg" class="img-responsive" 'El cine francés'></a>
              <p>"El cine francés por los fotógrafos de Magnum" se presenta, durante los meses de <strong>febrero y marzo</strong> del 2015, en la estación <strong>División del Norte</strong> de la línea 3 de STC Metro.</p>
              <p><a class="btn btn-default" href="/pages/press/exposicion-magnum" role="button">Leer más »</a></p>
            </div><!--/span-->

            <div class="col-6 col-sm-6 col-lg-6">
              <h4>PIONEROS DEL CINE</h4>
              <img src="/imgs/exposiciones/pioneros/pioneros1.jpg" class="img-responsive" 'Pioneros del cine'></a>
              <p>"Pioneros del cine" se presenta, durante los meses de <strong>febrero y marzo</strong> del 2015, en la <strong>sala de exposiciones de la Filmoteca de la UNAM</strong>.</p>
              <p><a class="btn btn-default" href="/pages/press/exposicion-pioneros-del-cine" role="button">Leer más »</a></p>
            </div><!--/span-->
            
            
            

          </div><!--/row-->
        </div><!--/span-->


@stop