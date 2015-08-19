@section('breadcrumbs')
<li>
  <a href="/pages/cursos/cursos-y-talleres">
    Extensión Academica
  </a>
</li>
<li>
<a href="/pages/cursos/cursos-y-talleres">
    Cursos y talleres
  </a>
</li>
<li class="active">
Cine Mexicano y los gobiernos de 1896 a  2014
</li>
@stop


@section('sidebar')
  @include('elements.menus.extension-academica', array('selected' => 0))
@stop



@section('content')

    {{ $page->body }}

@stop