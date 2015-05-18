@extends('layouts.modal')

@section('title') 

Agregar/Editar icono

@stop



@section('content')

<form class="form-horizontal" ng-submit="save()">

	{{ Form::formGroup('text','name','Nombre', 'icon') }}

	{{ Form::wrapperInput('image', 'Icono', Form::file('icon',['file-model' => 'icon.image'])) }}

    <button class="btn btn-success pull-right" ng-show="action=='create'" ng-click="store()">Agregar</button>
	<button class="btn btn-success pull-right" ng-show="action=='update'" ng-click="update()">Actualizar</button>
	<div class="clearfix"></div>
</form>

@stop



@section('footer')
	<div class="alert alert-danger text-center" ng-show="message != ''">@{{message}}</div>
@stop