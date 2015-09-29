@section('breadcrumbs')
<li>
	<a href="/exhibition#/">
		Programación
	</a>
</li>
<li class="active">
	Dodo
</li>
@stop

@section('sidebar')
	@include('elements.menus.programacion', array('selected' => 0))
@stop


@section('content')

    {{ $page->body }}

@stop