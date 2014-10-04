@extends('layouts.modal')

@section('title') 

Agregar película

@stop



@section('content')

<form ng-submit="store()" class="form-horizontal">

	@include('films.fields')
	
	<button type="submit" class="btn btn-success pull-right">Agregar</button>
	<div class="clearfix"></div>
</form>

@stop



@section('footer')
	<div class="alert alert-danger text-center" ng-show="message != ''">@{{message}}</div>
@stop