@section('breadcrumbs')
<li>
  <a href="/press_register">
    Difusión
  </a>
</li>
<li>
		<a href="/pages/difusion/publicaciones">
			Publicaciones
		</a>
	</li>
<li class="active">
   Libros digitales
</li>
@stop

@section('sidebar')
  @include('elements.menus.difusion', array('selected' => 2))
@stop


@section('content')

    {{ $page->body }}

@stop