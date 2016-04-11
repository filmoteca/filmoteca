@extends('exhibitions.layouts.frontend')

@section('metas')

@stop

@section('breadcrumbs')
    <li class="active">@lang('exhibitions.frontend.exhibition.index.breadcrumbs_title')</li>
@stop

@section('title')
    @lang(
        'exhibitions.frontend.exhibition.index.title',
        [
            'textual_day' => @trans('dates.days.' . $date->format('l')),
            'numeric_day' => $date->format('j'),
            'textual_month' => @trans('dates.months.' . $date->format('F'))
        ]
    )
@stop

@section('content')

    <span class="result-number">
        @lang('exhibitions.frontend.exhibition.index.results_number', ['number' => $exhibitions->getTotal()])
    </span>

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

        <div class="center-block">
            {{ $exhibitions->links() }}
        </div>
    </div>
@stop
