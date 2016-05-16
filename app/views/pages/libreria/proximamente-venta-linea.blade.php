@section('breadcrumbs')
	<li>
		<a href="/pages/libreria/libreria">
			Libreria
		</a>
	</li>
	<li class="active">
		Tienda en línea
	</li>
@stop

@section('sidebar')
  @include('elements.menus.libreria', array('selected' => 1))
@stop


@section('content')

    {{ $page->body }}

@stop