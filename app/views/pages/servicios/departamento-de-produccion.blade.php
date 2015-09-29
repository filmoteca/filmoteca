@section('breadcrumbs')
<li>
	<a href="/pages/servicios/banco-de-imagen">
		Servicios
	</a>
</li>
<li class="active">
	Producción
</li>
@stop

@section('sidebar')
	@include('elements.menus.servicios', array('selected' => 7))
@stop



@section('content')

    {{ $page->body }}

@stop