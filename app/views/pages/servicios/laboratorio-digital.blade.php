@section('breadcrumbs')
<li>
	<a href="/pages/servicios/banco-de-imagen">
		Servicios
	</a>
</li>
<li class="active">
	Laboratorio digital
</li>
@stop

@section('sidebar')
	@include('elements.menus.servicios', array('selected' => 5))
@stop



@section('content')

    {{ $page->body }}

@stop