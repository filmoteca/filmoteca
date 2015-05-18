@extends('layouts.default')

@section('breadcrumbs')
<li class="active">
	Contacto
</li>
@stop

@section('content')
	@include('laravel-contact-form::form')
@stop