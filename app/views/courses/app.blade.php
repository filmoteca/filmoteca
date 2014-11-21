@extends('layouts.app')

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

<div class="content" ng-view>

	<!-- <div class="loading" ng-show="loading"></div> -->
</div>
@stop