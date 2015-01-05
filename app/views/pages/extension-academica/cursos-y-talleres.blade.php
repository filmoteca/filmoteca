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
	@include('elements.menus.extension-academica', array('selected' => 1))
@stop


@section('content')


<h1>Cursos de la Filmoteca de la UNAM</h1>

<p>No te pierdas la oportunidad de inscribirte a los cursos que ofrece la Filmoteca UNAM para ti: </p>

@stop