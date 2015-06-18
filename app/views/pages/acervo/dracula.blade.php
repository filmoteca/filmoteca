

@section('breadcrumbs')
	<li>
		<a href="/pages/acervo/filmico">
			Acervo
		</a>
	</li>
	<li class="active">
		Restauración
	</li>
@stop


@section('sidebar')
	@include('elements.menus.acervo', array('selected' => 3))
@stop


@section('content')

    {{ $page->body }}

@stop