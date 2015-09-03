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
	Los malos hacen lo que los buenos sueñan. Ciclo de Cine Alemán
</li>

@stop

@section('sidebar')
	@include('elements.menus.difusion', array('selected' => 2))
@stop


@section('content')

    {{ $page->body }}

@stop