@section('breadcrumbs')
<li>
	<a href="/pages/servicios/banco-de-imagen">
		Servicios
	</a>
</li>
<li class="active">
	Banco de imagen
</li>
@stop

@section('sidebar')
	@include('elements.menus.servicios', array('selected' => 0))
@stop



@section('content')

    {{ $page->body }}

@stop