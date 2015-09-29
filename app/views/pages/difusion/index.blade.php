@section('breadcrumbs')
	<li>
		<a href="/pages/difusion/index">
			Difusión
		</a>
	</li>
	
@stop


@section('sidebar')
	@include('elements.menus.difusion', array('selected' => 0))
@stop


@section('content')

    {{ $page->body }}

@stop