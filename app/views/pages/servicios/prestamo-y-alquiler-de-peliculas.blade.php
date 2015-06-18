@section('breadcrumbs')
<li>
	<a href="/pages/servicios/banco-de-imagen">
		Servicios
	</a>
</li>
<li class="active">
	Préstamo y alquiler de películas
</li>
@stop

@section('sidebar')
	@include('elements.menus.servicios', array('selected' => 6))
@stop



@section('content')

    {{ $page->body }}

@stop