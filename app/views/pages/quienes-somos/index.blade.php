@section('breadcrumbs')
	<li>
		<a href="/pages/quienes-somos/index">
			Quiénes somos
		</a>
	</li>
	
@stop


@section('sidebar')
	@include('elements.menus.quienes-somos', array('selected' => 0))
@stop


@section('content')

    {{ $page->body }}

@stop