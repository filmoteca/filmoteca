@section('breadcrumbs')
<li>
	<a href="/pages/extencion-academica/index">
		Extensión Academica
	</a>
</li>
<li class="active">
	Procedimiento de inscripción.
</li>
@stop


@section('sidebar')
	@include('elements.menus.extension-academica', array('selected' => 0))
@stop



@section('content')

    {{ $page->body }}

@stop