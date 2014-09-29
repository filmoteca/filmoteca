@extends('layouts.modal')

@section('title') 

Agregar película

@stop



@section('content')

<form ng-submit="store()" class="form-horizontal">

	{{-- @include('films.fields')--}}

	título: <input type="text" ng-model="film.title">
	Imagen: <input type="file" file-model="film.image">
	
	<button type="submit" class="btn btn-success pull-right">Agregar</button>
	<div class="clearfix"></div>
</form>

@stop



@section('footer')
	<div class="alert alert-danger" ng-show="message != ''">@{{message}}</div>
@stop