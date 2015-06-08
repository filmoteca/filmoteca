@section('breadcrumbs')
<li>
  <a href="/pages/extension-academica/index">
    Extensión Academica
  </a>
</li>
<li class="active">
  Cursos y talleres.
</li>
@stop


@section('sidebar')
  @include('elements.menus.extension-academica', array('selected' => 0))
@stop



@section('content')

    {{ $page->body }}

@stop