@extends('layouts.ajax')

@section('content')

	<a class="btn" ng-click="showExhibitions()">
		<span class="glyphicon glyphicon-chevron-left"></span>
		Regresar
	</a>

	@include('exhibitions.partial-details')
@stop