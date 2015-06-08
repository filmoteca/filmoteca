@section('breadcrumbs')
<li>
	<a href="/pages/servicios/index">
		Difusión
	</a>
</li>
<li class="active">
	Exposiciones
</li>
@stop

@section('sidebar')
	@include('elements.menus.press', array('selected' => 1))
@stop



@section('content')

    {{ $page->body }}

@stop