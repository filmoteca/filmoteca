@section('breadcrumbs')
<li>
  <a href="/pages/cursos/cursos-y-talleres">
    Extensión Academica
  </a>
</li>
<li>
<a href="/pages/programa-leer-cine/programa-leer-cine">
    Programa leer cine
  </a>
</li>
<li class="active">
Taller de guión para medios audiovisuales
</li>
@stop


@section('sidebar')
  @include('elements.menus.extension-academica', array('selected' => 0))
@stop



@section('content')

  {{ $page->body }}

@stop