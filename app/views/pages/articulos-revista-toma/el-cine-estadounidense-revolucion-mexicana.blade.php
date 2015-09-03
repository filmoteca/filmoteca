@section('breadcrumbs')
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
	El cine estadounidense de la Revolución mexicana y la Primera Guerra Mundial
</li>
@stop

@section('sidebar')
	@include('elements.menus.difusion', array('selected' => 2))
@stop


@section('content')

    {{ $page->body }}

@stop