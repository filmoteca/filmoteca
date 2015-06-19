@section('breadcrumbs')
	<li>
		<a href="/pages/acervo/filmico">
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

    {{ $page->body }}

@stop