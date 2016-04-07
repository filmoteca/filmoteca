@extends('exhibitions.layouts.frontend')

@section('metas')

@stop

@section('breadcrumbs')
    <li class="active">@lang('exhibitions.frontend.exhibition.index.breadcrumbs_title')</li>
@stop

@section('title')
    @lang(
        'exhibitions.frontend.exhibition.index.breadcrumbs_title',
        [
            'textual_day' => @trans('dates.days.' . $date->format('l')),
            'numeric_day' => $date->format('j'),
            'textual_month' => @trans('dates.months.' . $date->format('F'))
        ]
    )
@stop

@section('content')
    <h1>
        @lang(
        'exhibitions.frontend.exhibition.index.title',
        [
            'textual_day' => @trans('dates.days.' . $date->format('l')),
            'numeric_day' => $date->format('j'),
            'textual_month' => @trans('dates.months.' . $date->format('F'))
        ]
    )
    </h1>

    <div class="exhibitions index">
    @foreach ($exhibitions as $exhibition)
        @include('exhibitions.frontend.exhibitions.partials.details')
    @endforeach
    </div>
@stop

