@section('breadcrumbs')
	<li>
		<a href="/pages/quienes-somos/index">
			Quiénes somos
		</a>
	</li>
	<li class="active">
		Libro Filmoteca UNAM: 50 años
	</li>
@stop


@section('sidebar')
	@include('elements.menus.quienes-somos', array('selected' => 6))
@stop


@section('content')

    {{ $page->body }}

@stop