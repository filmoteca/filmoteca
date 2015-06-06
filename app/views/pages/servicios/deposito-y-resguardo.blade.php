@section('breadcrumbs')
<li>
	<a href="/pages/servicios/index">
		Servicios
	</a>
</li>
<li class="active">
	Depósito y resguardo
</li>
@stop

@section('sidebar')
	@include('elements.menus.servicios', array('selected' => 3))
@stop


@section('content')

    {{ $page->body }}

@stop