@extends('layouts.default')

@section('breadcrumbs')
<li>
	<a>
		Difusión
	</a>
</li>
<li class="active">
	La Filmoteca recomienda
@stop

@section('sidebar')
	@include('elements.menus.press', array('selected' => 5))
@stop


@section('content')

    {{ $page->body }}

@stop