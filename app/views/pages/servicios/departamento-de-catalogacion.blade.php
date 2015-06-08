@section('breadcrumbs')
<li>
	<a href="/pages/servicios/index">
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