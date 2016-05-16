section('breadcrumbs')
<li>
	<a href="/press_register">
		Difusión
	</a>
</li>
<li>
	<a href="/pages/difusion/articulos">
		Artículos
	</a>
</li>
<li class="active">
	Algo sobre la comedia en el cine
</li>
@stop

@section('sidebar')
	@include('elements.menus.difusion', array('selected' => 2))
@stop


@section('content')

    {{ $page->body }}

@stop