@extends('layouts.default')

@section('sidebar')
    <div class="hidden-xs">
        @include('exhibitions.frontend.exhibitions.partials.sidebar')
    </div>

    <div class="visible-xs">
        @include('exhibitions.frontend.exhibitions.partials.searcher-form')
        <div id="exhibitions-calendar-button" class="btn btn-default center-block">
            <span class="glyphicon glyphicon-calendar"></span>
            @lang('exhibitions.frontend.calendar.show_calendar')
        </div>
        <div id="exhibitions-calendar" style="display: none">
            @include('exhibitions.frontend.exhibitions.partials.calendar')
        </div>
    </div>
@stop
