@section('breadcrumbs')
<li>
	<a href="/pages/servicios/index">
		Servicios
	</a>
</li>
<li class="active">
	Depósito y resguardo
</li>
@stop





@section('content')

<div class="sidebar">
	@include('elements.menus.servicios', array('selected' => 3))
</div>

<div class="content">
	<div class="img-servicios">
		<img src="/assets/imgs/bovedas.jpg" aling="left">
	</div>
	<h1>Depósito y resguardo </h1>
	<h3>Bóvedas</h3>

	<p>Cambiar este texto por el bueno---Esta área es la encargada de revisar todos los materiales que ingresan a la Filmoteca por diferentes conductos: depósitos, donaciones, compras, intercambios, permisos de copia, etcétera, en formatos de 8mm, súper 8, 9.5mm, 16mm, 35mm, e incluso de 70 mm, ya sean duplicados originales, duplicados negativos, positivos originales o duplicados positivos; en soportes de nitrato, acetato y poliéster. El material de nitrato tiene prioridad, al ser de alto riesgo para el personal debido a ser altamente inflamable, por eso se cuenta con siete bóvedas de nitrato, ubicadas cerca de la Estación General de Bomberos, en donde se albergan casi 16 mil latas clasificadas. </p>


	<p>Responsable: Juan García</p>
	<p>Tel: 56 22 95 86 </p>
	<p>Correo electrónico: <a href="mailto:filmbov@unam.mx">filmbov@unam.mx</a></p>


</div>

@stop