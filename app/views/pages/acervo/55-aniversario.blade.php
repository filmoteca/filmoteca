@section('breadcrumbs')
	<li>
		<a href="/pages/acervo/filmico">
			Acervo
		</a>
	</li>
	<li class="active">
		55 aniversario
	</li>
@stop


@section('sidebar')
	@include('elements.menus.acervo', array('selected' => 1))
@stop


@section('content')

    {{ $page->body }}

@stop
