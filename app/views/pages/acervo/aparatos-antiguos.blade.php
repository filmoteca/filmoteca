@section('breadcrumbs')
	<li>
		<a href="/pages/acervo/index">
			Acervo
		</a>
	</li>
	<li class="active">
		Aparatos antiguos
	</li>
@stop


@section('sidebar')
	@include('elements.menus.acervo', array('selected' => 1))
@stop


@section('content')

	<div class="img-servicios">
		<img src="/imgs/acervos/aparatos-antiguos.jpg" aling="left" alt="Aparatos antiguos">
	</div>

	<h1>Aparatos antiguos</h1>


	<p>TEXTO PENDIENTE</p>

	



@stop
