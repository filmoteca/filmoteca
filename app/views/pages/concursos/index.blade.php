@section('breadcrumbs')
	<li>
		<a href="/pages/concursos/index">
			Concursos
		</a>
	</li>
	
@stop


@section('sidebar')
	@include('elements.menus.concursos', array('selected' => 0))
@stop


@section('content')

    {{ $page->body }}

@stop