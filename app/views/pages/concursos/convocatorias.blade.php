@section('breadcrumbs')
	<li>
		<a href="/pages/concursos/jose-rovirosa">
			Concursos
		</a>
	</li>
	<li class="active">
		Convocatorias
	</li>
@stop

@section('sidebar')
	@include('elements.menus.concursos', array('selected' => 6))
@stop

@section('content')

    {{ $page->body }}

@stop