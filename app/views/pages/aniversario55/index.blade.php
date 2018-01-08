@section('breadcrumbs')
	<li>
		<a href="/pages/aniversario55/index">
			55 Aniversario
		</a>
	</li>
	
@stop


@section('sidebar')
	@include('elements.menus.quienes-somos', array('selected' => 7))
@stop


@section('content')

    {{ $page->body }}

@stop
