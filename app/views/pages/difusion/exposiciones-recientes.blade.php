
@section('breadcrumbs')
	<li>
		<a href="/press_register">
			Difusión
		</a>
	</li>
	<li>
		<a href="/pages/difusion/exposiciones-museografia">
			Exposiciones
		</a>
	</li>
	<li class="active">
		Exposiciones recientes
	</li>
@stop


@section('sidebar')
	@include('elements.menus.difusion', array('selected' => 1))
@stop


@section('content')

    {{ $page->body }}

@stop