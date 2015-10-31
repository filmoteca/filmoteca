@extends('layouts.dashboard.master-app')

@section('scripts')
    <script src="{{ asset('/bower_components/requirejs/require.js') }}" data-main="/apps/admin/exhibition/App.js"></script>
@stop

@section('styles')

{{ HTML::styles([
    '/bower_components/angucomplete-alt/angucomplete-alt.css',
    '/bower_components/ng-tags-input/ng-tags-input.min.css',
    '/bower_components/textAngular/src/textAngular.css'
    ])
}}

@stop

@section('content')

<div class="messages-stack ng-cloak">
     <alert ng-repeat="alert in alerts track by $index" type="@{{alert.type}}" close="closeAlert($index)">@{{alert.msg}}</alert>
</div>

<div class="view-animate-container">
    <div ng-view class="view-animate"></div>
</div>

@stop
