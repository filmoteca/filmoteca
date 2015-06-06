@section('breadcrumbs')
	<li>
		<a href="/pages/quienes-somos/index">
			Quiénes somos
		</a>
	</li>
	<li class="active">
		Consejo Asesor
	</li>
@stop


@section('sidebar')
	@include('elements.menus.quienes-somos', array('selected' => 2))
@stop


@section('content')

    {{ $page->body }}

@stop	