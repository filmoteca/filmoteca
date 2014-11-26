@extends('layouts.default')

@section('breadcrumbs')
	<li>{{ HTML::linkRoute('exhibitions.history','Historico de programación') }}</li>
	<li class="active">Detalle de exhibición</li>
@stop

@section('content')
	@include('exhibitions.partial-details')
@stop