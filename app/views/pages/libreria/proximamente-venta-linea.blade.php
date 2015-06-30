@section('breadcrumbs')
	<li>
		<a href="/pages/libreria/libreria">
			Libreria
		</a>
	</li>
	<li class="active">
		Venta en línea
	</li>
@stop

@section('sidebar')
  @include('elements.menus.difusion', array('selected' => 2))
@stop


@section('content')

    {{ $page->body }}

@stop