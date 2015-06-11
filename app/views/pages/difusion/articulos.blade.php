@section('breadcrumbs')
	<li>
		<a href="/pages/difusion/index">
			Difusión
		</a>
	</li>
	<li class="active">
	 Artículos
</li>
@stop


@section('sidebar')
	@include('elements.menus.quienes-somos', array('selected' => 0))
@stop


@section('content')

    {{ $page->body }}

@stop