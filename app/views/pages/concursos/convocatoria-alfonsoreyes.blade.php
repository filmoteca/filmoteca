@section('breadcrumbs')
	<li>
		<a href="/pages/concursos/jose-rovirosa">
			Concursos
		</a>
	</li>
	<li>
		<a href="/pages/concursos/alfonso-reyes">
			 Alfonso Reyes "Fósforo"
		</a>
	</li>
	<li class="active">
		Convocatoria Concurso de crítica cinematográfica Alonso Reyes "Fosforo"
	</li>
@stop

@section('sidebar')
	@include('elements.menus.concursos', array('selected' => 1))
@stop

@section('content')

    {{ $page->body }}

@stop