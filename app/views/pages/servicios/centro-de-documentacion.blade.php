@section('breadcrumbs')
<li>
	<a href="/pages/servicios/index">
		Servicios
	</a>
</li>
<li class="active">
	Centro de documentación
</li>
@stop





@section('content')

<div class="sidebar">
	@include('elements.menus.servicios', array('selected' => 3))
</div>

<div class="content">
	<div class="img-servicios">
		<img src="/assets/imgs/fragmentos.jpg" aling="left">
	</div>
	<h1>Centro de documentación</h1>

	<p>Esta sección apoya principalmente 
	</p>

	
	<p>Responsable: Antonia Rojas</p> 
	<p>Teléfono: 56 22 93 76 </p>
	<p>Correo electrónico: <a href="mailto:antonia@unam.mx">carriles@unam.mx</a></p>

	<p>*Para tener acceso a este departamentos consultar 
	{{ HTML::link(
		'/pages/servicios/lineamientos_generales_para_acceder_al_material',
		'Lineamientos para acceso al material.' )                            
		}}</p>
</div>

@stop