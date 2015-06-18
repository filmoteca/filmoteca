@extends('layouts.default')

@section('breadcrumbs')
<li>
	<a href="/press_register">
		Difusión
	</a>
</li>
<li class="active">
	Filmoteca en los Medios
@stop

@section('sidebar')
	@include('elements.menus.difusion', array('selected' => 4))
@stop


@section('content')

    {{ $page->body }}

@stop