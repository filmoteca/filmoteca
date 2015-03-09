@section('breadcrumbs')
<li>
	<a href="/pages/servicios/index">
		Servicios
	</a>
</li>
<li class="active">
	Laboratorio digital
</li>
@stop

@section('sidebar')
	@include('elements.menus.servicios', array('selected' => 5))
@stop



@section('content')

	<div class="img-servicios">
		<img src="/imgs/servicios/laboratorio-digital.jpg" aling="left" class="img-responsive" 'Laboratorio digital'>
	</div>
	<h1>Laboratoro digital</h1>

	<p>TEXTO PENDIENTE
	</p>

	


	<p>Responsable: M.C. Gerardo León Lastra</p> 
	<p>Teléfono: 5622 4800 ext. 47432</p>
	<p>Correo electrónico: <a href="mailto:gleonl@unam.mx">gleonl@unam.mx</a></p>


@stop