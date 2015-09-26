@extends('layouts.defaul')

@section('scripts')

	{{ HTML::script('/apps/require.config.js')}}

	{{ HTML::script(
		'/bower_components/requirejs/require.js', 
		['data-main' =>'/apps/pages/courses/App.js'])
	}}
@stop

@section('styles')

@stop

@section('breadcrumbs')

@stop

{{----------------------------------------------------------------------------}}
{{-- Main Content															--}}
{{----------------------------------------------------------------------------}}

@section('content')
	
<div class="sidebar">
	Side bar
</div>

<div class="content">
	<div class="alert alert-dismissible ng-cloak" ng-class="'alert-' + messageType" ng-show="message">
		@{{message}}
		<button type="button" class="close" ng-click="closeAlert()"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	</div>
	<div ng-view>
		<div class="loading" ng-show="loading"></div>
	</div>
</div>
@stop