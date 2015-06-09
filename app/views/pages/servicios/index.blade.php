@section('breadcrumbs')
	<li>
		<a href="/pages/servicios/index">
		Servicios
		</a>
	</li>
	
@stop


@section('sidebar')
	@include('elements.menus.servicios', array('selected' => 0))
@stop


@section('content')

    {{ $page->body }}

@stop