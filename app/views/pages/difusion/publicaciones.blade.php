@section('breadcrumbs')
<li>
	<a href="/press_register">
		Difusión
	</a>
</li>
<li class="active">
	Publicaciones
</li>
@stop

@section('sidebar')
	@include('elements.menus.difusion', array('selected' => 2))
@stop



@section('content')

	<div class="img-servicios">
		<img src="/assets/imgs/exposiciones-museo.jpg" aling="center">
	</div>  
	<h1>Publicaciones</h1>

	
@stop



