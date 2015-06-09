
@section('breadcrumbs')
	<li>
		<a href="/pages/difusion/index">
			Difusión
		</a>
	</li>
	<li class="active">
		Exposiciones / Exposiciones recientes
	</li>
@stop


@section('sidebar')
	@include('elements.menus.difusion', array('selected' => 1))
@stop


@section('content')

    {{ $page->body }}

@stop