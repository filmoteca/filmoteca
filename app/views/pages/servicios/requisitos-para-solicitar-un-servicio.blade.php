@section('breadcrumbs')
<li>
	<a href="/pages/servicios/banco-de-imagen">
		Servicios
	</a>
</li>
<li class="active">
	Requisitos para solicitar un servicio
</li>
@stop


@section('sidebar')
	@include('elements.menus.servicios', array('selected' => 8))
@stop


@section('content')

    {{ $page->body }}

@stop