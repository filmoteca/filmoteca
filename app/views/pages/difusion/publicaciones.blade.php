@section('breadcrumbs')
<li>
	<a href="/press_register">
		Difusión
	</a>
</li>
<li class="active">
	Publicaciones
</li>
@stop

@section('sidebar')
	@include('elements.menus.difusion', array('selected' => 2))
@stop



@section('content')

	{{ $page->body }}
	
@stop



