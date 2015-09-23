@extends('layouts.default')

@section('breadcrumbs')
    <li>
        {{ HTML::link('/exhibition', 'Programación') }}
    </li>
	<li>{{ HTML::link('exhibition/history','Histórico de programación') }}</li>
	<li class="active">Detalle de exhibición</li>
@stop

@section('content')
	@include('frontend.exhibitions.partials.details')
@stop