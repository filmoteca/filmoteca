@section('breadcrumbs')
<li>
	<a href="/pages/servicios/banco-de-imagen">
		Servicios
	</a>
</li>
<li class="active">
	Catalogación
</li>
@stop

@section('sidebar')
	@include('elements.menus.servicios', array('selected' => 1))
@stop



@section('content')

    {{ $page->body }}

@stop