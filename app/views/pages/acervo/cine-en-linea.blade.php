
@section('breadcrumbs')
	<li>
		<a href="/pages/acervo/filmico">
			Acervo
		</a>
	</li>
	<li class="active">
		Cine en línea
	</li>
@stop


@section('sidebar')
	@include('elements.menus.acervo', array('selected' => 5))
@stop


@section('content')

    {{ $page->body }}

@stop