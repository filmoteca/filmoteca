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

<div class="messages-stack ng-cloak">
     <alert ng-repeat="alert in alerts track by $index" type="@{{alert.type}}" close="closeAlert($index)">@{{alert.msg}}</alert>
</div>

<div class="view-animate-container">
    <div ng-view class="view-animate"></div>
</div>

@stop