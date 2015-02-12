@section('breadcrumbs')
<li>
  <a href="/pages/programacion/index">
    Programación
  </a>
</li>
<li class="active">
  Invitaciones
</li>
@stop


@section('sidebar')
	@include('elements.menus.programacion', array('selected' => 2))
@stop


@section('content')


<h1>Invitaciones</h1>

<p>No te pierdas la oportunidad de </p>

@stop