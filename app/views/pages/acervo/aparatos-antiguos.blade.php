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

    {{ $page->body }}

@stop
