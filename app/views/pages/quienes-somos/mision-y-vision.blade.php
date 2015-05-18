@section('breadcrumbs')
	<li>
		<a href="/pages/quienes-somos/index">
			Quiénes somos
		</a>
	</li>
	<li class="active">
		Misión y Visión
	</li>
@stop

@section('sidebar')
	@include('elements.menus.quienes-somos', array('selected' => 0))
@stop

@section('content')

    {{ $page->body }}

@stop
