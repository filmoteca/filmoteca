
@section('breadcrumbs')
	<li>
		<a href="/pages/cartelera-digital/index">
			Programacion
		</a>
	</li>
	<li class="active">
		Invitaciones
	</li>
@stop


@section('sidebar')
	@include('elements.menus.programacion', array('selected' => 2))

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

        
       <h1>INVITACIONES</h1>
    
         <p>Todos los <strong>miércoles y jueves</strong> hay <strong>ENTRADA LIBRE</strong> en las funciones de las <strong>12:00 hrs.</strong> en las salas del Centro Cultural Universitario (Julio Bracho, José Revueltas y Carlos Monsiváis). Cupo limitado.</p>
     <br>
  
         <p>Para funciones especiales es necesario que descargues e imprimas tu invitación. Canjéala en taquilla.</p>
          
        <div class="row">

            <div class="col-sm-12">
              <h3>Febrero 2015</h3>
            </div>
            <br>
              <div class="col-6 col-sm-6 col-lg-6">
                <a href="http://filmoteca.dev/pdf/invitaciones/invitacion_blackfish.pdf" target="_blank">
                  <img src="/imgs/invitaciones/invitacion_blackfish.jpg" alt="Invitación" class="img-responsive">
                </a>
                  <p>Jueves 12 de febrero<br>
                  Sala Carlos Monsiváis / 17:00 hrs.</p>
              </div><!--/span-->
              <div class="col-6 col-sm-6 col-lg-6">
                <a href="http://filmoteca.dev/pdf/invitaciones/invitacion_viaje.pdf" target="_blank">
                  <img src="/imgs/invitaciones/invitacion_viaje.jpg" alt="Invitación" class="img-responsive">
                </a>
                  <p>Miércoles 18 de febrero<br>
                  Sala Carlos Monsiváis / 18:00 hrs.</p>
              </div><!--/span-->
              
              <div class="col-6 col-sm-6 col-lg-6">
                <a href="http://filmoteca.dev/pdf/invitaciones/invitacion_club.pdf" target="_blank">
                  <img src="/imgs/invitaciones/invitacion_club.jpg" alt="Invitación" class="img-responsive">
                </a>
                  <p>18 y 19 de febrero<br>
                  Sala José Revueltas / 12:00 hrs.</p>
              </div><!--/span-->
              
              <div class="col-6 col-sm-6 col-lg-6">
                <a href="http://filmoteca.dev/pdf/invitaciones/invitacion_hijos.pdf" target="_blank">
                  <img src="/imgs/invitaciones/invitacion_hijos.jpg" alt="Invitación" class="img-responsive">
                </a>
                  <p>Jueves 19 de febrero<br>
                  Sala Julio Bracho / 12:00 hrs.</p>
              </div><!--/span-->
            
        </div><!--/row-->

		
@stop
