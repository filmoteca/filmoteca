
@section('breadcrumbs')
	<li>
		<a href="/pages/cartelera-digital/index">
			Programacion
		</a>
	</li>
	<li class="active">
		Cartelera digital
	</li>
@stop


@section('sidebar')
	@include('elements.menus.programacion', array('selected' => 1))

    <div class="subscribe-box">
      
      <p>Recibe nuestra cartelera digital</p>

      <div class="input-group input-group-sm">
        <input type="email" 
          name="email" 
          placeholder="Ingresa tu correo electrónico"
          class="form-control">
        <span class="input-group-addon">@</span>
      </div>

      <button type="button" class="btn btn-success">Enviar</button>
    </div>

@stop


@section('content')


      <div class="col-xs-12 col-sm-12">
         
         <h3>CARTELERA DIGITAL</h3>

          <div class="row">

            <div class="col-12 col-sm-12 col-lg-12">
              <h5>MARZO 2015</h5>
                <div class="col-sm-12">
                  <img src="/imgs/cartelera/cartelera-marzo2015.jpg" class="img-responsive" 'Cartelera marzo 2015'>
                </div>
              <div class="col-sm-12">
                <br>
                <a href="http://filmoteca.dev/pdf/cartelera/carteleradigitalmarzo2015.pdf" target="_blank" align>Descarga / </a>
                <a href="http://issuu.com/filmotecaunam/docs/carteleradigitalmarzo2015" target="_blank"> Consulta</a>
              </div>
            </div><!--/span-->

          </div><!--/row-->
          <br><br>

          <div class="row">
           <h5>CARTELERAS ANTERIORES 2015</h5>
            <div class="col-3 col-sm-4 col-lg-3">
              <p>Febrero</p>
              <img src="/imgs/cartelera/cartelera-febrero2015.jpg" class="img-responsive" 'Cartelera febrero 2015'></a>
              <div class="col-sm-12">
                <br>
                <a href="http://filmoteca.dev/pdf/cartelera/CarteleraDigitalFeb2015.pdf" target="_blank">Descarga / </a>
                <a href="http://issuu.com/filmotecaunam/docs/carteleradigitalfeb2015" target="_blank"> Consulta</a>
              </div>
            </div><!--/span-->

            <div class="col-3 col-sm-4 col-lg-3">
            <p>Dic. 2014 - Enero 2015</p>
              <img src="/imgs/cartelera/carteleradic2014-ene2015.jpg" class="img-responsive" 'Cartelera enero 2015'></a>
              <div class="col-sm-12">
                <br>
                <a href="http://filmoteca.dev/pdf/cartelera/CarteleraDigitalDicEne.pdf" target="_blank">Descarga / </a>
                <a href="http://issuu.com/filmotecaunam/docs/carteleradigitaldicene_c70703a2ec9554" target="_blank"> Consulta</a>
              </div>
            </div><!--/span-->

          </div><!--/row-->


           <br><br>
         <!--  <div class="row">
           <h5>CARTELERAS ANTERIORES 2014</h5>
            <div class="col-3 col-sm-4 col-lg-3">
              <p>Diciembre</p>
              <img src="/imgs/cursos/orson-welles.jpg" class="img-responsive" 'La mancha de sangre'></a>
              <div class="col-sm-12">
                <br>
                <a href="" target="_blank">Descarga / </a>
                <a href="" target="_blank"> Consulta</a>
              </div>
            </div> --><!--/span-->

            <!-- <div class="col-3 col-sm-4 col-lg-3">
            <p>Noviembre</p>
              <img src="/imgs/cursos/orson-welles.jpg" class="img-responsive" 'La mancha de sangre'></a>
              <div class="col-sm-12">
                <br>
                <a href="" target="_blank">Descarga / </a>
                <a href="" target="_blank"> Consulta</a>
              </div>
            </div> --><!--/span-->

            <!-- <div class="col-3 col-sm-4 col-lg-3">
            <p>Enero</p>
              <img src="/imgs/cursos/orson-welles.jpg" class="img-responsive" 'La mancha de sangre'></a>
              <div class="col-sm-12">
                <br>
                <a href="" target="_blank">Descarga / </a>
                <a href="" target="_blank"> Consulta</a>
              </div>
            </div> --><!--/span-->

          </div><!--/row-->

        </div><!--/span-->
 


		
@stop
