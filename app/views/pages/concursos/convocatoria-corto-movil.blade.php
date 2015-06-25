@section('breadcrumbs')
	<li>
		<a href="/pages/concursos/jose-rovirosa">
			Concursos
		</a>
	</li>
	<li>
		<a href="/pages/concursos/corto-movil">
			Corto Móvil
		</a>
	</li>
	<li class="active">
		Convocatoria Corto Móvil
	</li>
@stop

@section('sidebar')
	@include('elements.menus.concursos', array('selected' => 3))
@stop

@section('content')

    {{ $page->body }}

@stop