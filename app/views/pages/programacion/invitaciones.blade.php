
@section('breadcrumbs')
  <li>
    <a href="/pages/cartelera-digital/index">
      Programacion
    </a>
  </li>
  <li class="active">
    Invitaciones
  </li>
@stop


@section('sidebar')
  @include('elements.menus.programacion', array('selected' => 2))

    <div class="subscribe-box">
      
      <p>Recibe nuestra cartelera digital</p>

      <div class="input-group input-group-sm">
        <input type="email" 
          name="email" 
          placeholder="Ingresa tu correo electrónico"
          class="form-control">
        <span class="input-group-addon">@</span>
      </div>

      <button type="button" class="btn btn-success">Enviar</button>
    </div>

@stop


@section('content')

    {{ $page->body }}

@stop

