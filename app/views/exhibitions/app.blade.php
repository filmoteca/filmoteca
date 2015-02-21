@extends('layouts.dashboard.master-app')

@section('scripts')
{{ HTML::script(
    '/bower_components/requirejs/require.js', 
    ['data-main' =>'/apps/admin/exhibition/App.js'])
}}
@stop

@section('styles')

{{ HTML::styles(array('/bower_components/angucomplete-alt/angucomplete-alt.css')) }}

@stop

@section('content')

<style>
.view-animate-container{
    position:relative;
}
</style>
<div class="alert alert-success ng-cloak" ng-show="message">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    @{{message}}
</div>
<div class="view-animate-container">
    <div ng-view class="view-animate"></div>
</div>

@stop