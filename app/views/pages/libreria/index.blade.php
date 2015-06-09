@section('breadcrumbs')
	<li>
		<a href="/pages/libreria/index">
			Libreria
		</a>
	</li>
	
@stop


@section('sidebar')
	@include('elements.menus.libreria', array('selected' => 0))
@stop


@section('content')

    {{ $page->body }}

@stop