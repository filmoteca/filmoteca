@section('breadcrumbs')
<li>
  <a href="/pages/servicios/index">
    Difusión
  </a>
</li>
<li class="active">
  Publicaciones / Libros digitales
</li>
@stop

@section('sidebar')
  @include('elements.menus.press', array('selected' => 2))
@stop


@section('content')


      <h2>LIBROS DIGITALES</h2>
      <br>


        <div class="col-xs-12 col-sm-12">

          <div class="row">

            <div class="col-6 col-sm-6 col-lg-6">
              <h5></h5>
              <img src="/imgs/libros-digitales/en_tiempos_de_la_rev.jpg" class="img-responsive" 'En tiempos de la revolución'></a>
              <p><a class="btn btn-default" href="http://issuu.com/filmotecaunam/docs/en_tiempos_de_revolucion_39i" target="_blank" role="button">Leer »</a></p>
            </div><!--/span-->

            <div class="col-6 col-sm-6 col-lg-6">
              <h5></h5>
              <img src="/imgs/libros-digitales/cine_super_8.jpg" class="img-responsive" 'Cine super 8'></a>
              <p><a class="btn btn-default" href="http://issuu.com/filmotecaunam/docs/cine_s-8_prueba2" target="_blank" role="button">Leer »</a></p>
            </div><!--/span-->

            <div class="col-6 col-sm-5 col-lg-6">
              <h5></h5>
              <img src="/imgs/libros-digitales/libro-filmoteca-min.jpg" class="img-responsive" 'La mancha de sangre'></a>
              
              <p><a class="btn btn-default" href="http://issuu.com/libro_filmo/docs/filmotecaunam_libro50anos" target="_blank" role="button">Leer »</a></p>
            </div><!--/span-->


          </div><!--/row-->

        </div><!--/span-->

		
@stop
