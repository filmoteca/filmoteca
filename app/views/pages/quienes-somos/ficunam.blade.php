@section('breadcrumbs')
<li>
	<a href="/pages/quienes-somos/mision-y-vision">
		Quiénes somos
	</a>
</li>
<li class="active">
	FICUNAM
</li>
@stop

@section('sidebar')
	@include('elements.menus.quienes-somos', array('selected' => 8))
@stop


@section('content')

    {{ $page->body }}

@stop
