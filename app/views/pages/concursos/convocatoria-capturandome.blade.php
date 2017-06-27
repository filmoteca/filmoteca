@section('breadcrumbs')
	<li>
		<a href="/pages/concursos/jose-rovirosa">
			Concursos
		</a>
	</li>
	<li>
		<a href="/pages/concursos/capturando-me">
			Capturando-me
		</a>
	</li>
	<li class="active">
		Concurso Capturando-me
	</li>
@stop

@section('sidebar')
	@include('elements.menus.concursos', array('selected' => 5))
@stop

@section('content')

 {{ $page->body }}
 
@stop