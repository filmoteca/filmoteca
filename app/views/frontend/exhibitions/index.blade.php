@extends('layouts.default')

@section('metas')

@stop

@section('breadcrumbs')
    <li class="active">@lang('exhibitions.frontend.index.breadcrumbs_title')</li>
@stop

@section('title')
    @lang(
        'exhibitions.frontend.index.title',
        [
            'textual_day' => @trans('dates.days.' . $date->format('l')),
            'numeric_day' => $date->format('j'),
            'textual_month' => @trans('dates.months.' . $date->format('F'))
        ]
    )
@stop

@section('sidebar')

    @include('pages.home.partials.programming')

    @include('frontend.exhibitions.partials.billboard-subscription-form')

    <br><br>

    <div class="fb-page"
         data-href="https://www.facebook.com/Comunidad.Cines.UNAM/?fref=ts"
         data-tabs="timeline"
         data-small-header="true"
         data-adapt-container-width="true"
         data-hide-cover="false"
         data-show-facepile="true">
        <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/Comunidad.Cines.UNAM/?fref=ts">
                <a href="https://www.facebook.com/Comunidad.Cines.UNAM/?fref=ts">
                    @lang('exhibitions.show.unam_cinemas_community')
                </a>
            </blockquote>
        </div>
    </div>
@stop

@section('content')
    <h1>
        @lang(
        'exhibitions.frontend.index.title',
        [
            'textual_day' => @trans('dates.days.' . $date->format('l')),
            'numeric_day' => $date->format('j'),
            'textual_month' => @trans('dates.months.' . $date->format('F'))
        ]
    )
    </h1>

    <div class="exhibitions index">
    @foreach ($exhibitions as $exhibition)
        @include('frontend.exhibitions.partials.details')
    @endforeach
    </div>
@stop

