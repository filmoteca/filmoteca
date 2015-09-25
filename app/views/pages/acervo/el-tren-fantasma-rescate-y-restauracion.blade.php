
@section('breadcrumbs')
	<li>
		<a href="/pages/acervo/filmico">
			Acervo
		</a>
	</li>
	<li>
		<a href="/pages/acervo/restauracion">
			Restauración
		</a>
	</li>
	<li class="active">
		El tren fantasma rescate y restauración
	</li>
@stop


@section('sidebar')
	@include('elements.menus.acervo', array('selected' => 3))
@stop


@section('content')

    {{ $page->body }}

@stop