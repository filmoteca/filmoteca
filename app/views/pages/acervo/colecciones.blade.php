
@section('breadcrumbs')
	<li>
		<a href="/pages/acervo/filmico">
			Acervo
		</a>
	</li>
	<li>
		<a href="/pages/acervo/biblioteca">
			Biblioteca
		</a>
	</li>	
	<li class="active">
		Colecciones
	</li>
@stop


@section('sidebar')
	@include('elements.menus.acervo', array('selected' => 2))
@stop


@section('content')

    {{ $page->body }}

@stop