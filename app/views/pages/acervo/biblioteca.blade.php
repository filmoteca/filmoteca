@section('breadcrumbs')
	<li>
		<a href="/pages/acervo/index">
			Acervo
		</a>
	</li>
	<li class="active">
		Biblioteca
	</li>
@stop


@section('sidebar')
	@include('elements.menus.acervo', array('selected' => 2))
@stop


@section('content')

	<div class="img-servicios">
		<img src="/imgs/acervos/biblioteca.jpg" aling="left">
	</div>

	<h1>Biblioteca</h1>



		<p>TEXTO PENDIENTE</p>

@stop
