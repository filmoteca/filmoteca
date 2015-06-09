
@section('breadcrumbs')
	<li>
		<a href="/pages/acervo/index">
			Acervo
		</a>
	</li>
	<li class="active">
		Museo virtual de aparatos cinematográficos
	</li>
@stop


@section('sidebar')
	@include('elements.menus.acervo', array('selected' => 4))
@stop


@section('content')

    {{ $page->body }}

@stop