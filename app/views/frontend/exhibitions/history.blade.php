@extends('layouts.default')

@section('breadcrumbs')
	<li>
	    {{ HTML::link('/exhibition', 'Programación') }}
	</li>
	<li class="active">Histórico de programación</li>
@stop

@section('sidebar')
	@include('elements.menus.programacion', array('selected' => 3))

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

<div class="sidebar">
	
</div>

<div class="content">
	<h2>Histórico de programación</h2>

	<div class="well">
		{{ Form::open(['route' => 'exhibition.find', 'method' => 'GET', 'class' => 'form-horizontal']) }}

		{{ Form::formGroup('text', 'title', 'Título', 'exhibition_finder')}}

		{{ Form::formGroup('text', 'director', 'Director', 'exhibition_finder') }}

		{{ Form::submit('Buscar', ['class' => 'btn btn-success pull-right']) }}

		<div class="clearfix"></div>

		{{ Form::close()}}
	</div>

	@if( isset($resources) )
		
		<div class="alert alert-success">Resultados {{ $resources->count() }}</div>

        @if( $resources->count() > 0 )

			@include('frontend.exhibitions.partials.tabulator', ['editable' => false])

		@endif
	@endif
</div>

@stop