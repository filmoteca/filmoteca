@section('breadcrumbs')
<li>
  <a href="/pages/servicios/index">
    Difusión
  </a>
</li>
<li class="active">
  Publicaciones / Libros digitales
</li>
@stop

@section('sidebar')
  @include('elements.menus.difusion', array('selected' => 2))
@stop


@section('content')

    {{ $page->body }}

@stop