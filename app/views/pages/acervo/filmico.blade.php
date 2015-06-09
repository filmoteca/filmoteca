@section('breadcrumbs')
	<li>
		<a href="/pages/acervo/index">
			Acervo
		</a>
	</li>
	<li class="active">
		Acervo fílmico
	</li>
@stop


@section('sidebar')
	@include('elements.menus.acervo', array('selected' => 0))
@stop


@section('content')

    {{ $page->body }}

@stop
