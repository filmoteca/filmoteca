@section('breadcrumbs')
	<li>
		<a href="/pages/acervo/filmico">
			Acervo
		</a>
	</li>
	
@stop

<!--
@section('sidebar')
	@include('elements.menus.acervo', array('selected' => 0))
@stop

-->
@section('content')

    {{ $page->body }}

@stop
