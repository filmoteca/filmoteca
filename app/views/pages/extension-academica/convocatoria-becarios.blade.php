@section('breadcrumbs')
<li>
	<a href="/pages/cursos/cursos-y-talleres">
		Extensión Académica
	</a>
</li>
<li>
	<a href="/pages/extension-academica/becarios">
		Becarios
	</a>
</li>

<li class="active">
	Convocatoria Programa de Becarios
</li>
@stop


@section('sidebar')
	@include('elements.menus.extension-academica', array('selected' => 2))
@stop



@section('content')

    {{ $page->body }}

@stop