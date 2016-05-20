@extends('exhibitions.layouts.frontend')

@section('metas')

    <meta property="og:url"             content="{{ Request::url() }}" />
    <meta property="og:type"            content="video.movie" />
    <meta property="og:title"         content="{{ Config::get('parameters.institution.title') }}" />
    <meta property="og:description"   content="{{ Str::limit($film->getSynopsis()) }}" />
    <meta property="og:image"         content="{{ $domain . $film->getCover()->getSmallImageUrl() }}" />

    @foreach(explode(',', $film->getCast()) as $actor)
        <meta property="video:actor:first_name" content="{{ $actor }}" />
    @endforeach

    @foreach(explode(',', $film->getScript()) as $writer)
        <meta property="video:writer:first_name" content="{{ $writer }}" />
    @endforeach

    <meta property="video:duration" content="{{ $film->getDuration() }}" />

@stop

@section('breadcrumbs')
    <li>
        {{ html::linkRoute(
            'exhibitions.frontend.exhibitions.index',
            Lang::trans('exhibitions.frontend.exhibition.index.breadcrumbs_title')) }}
    </li>
    <li>@lang('exhibitions.frontend.film.index.title')</li>
    <li class="active">{{ $film->getTitle() }}</li>
@stop

@section('title')
    @lang('exhibitions.frontend.film.index.title') - {{ $film->getTitle() }}
@stop

@section('content')
    <div class="exhibitions index">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>{{ $film->getTitle() }}</h1>
            </div>


            <div class="panel-body">
                @include('exhibitions.frontend.films.partials.details', ['film' => $film])
            </div>
            <div class="panel-footer">
                <a href="{{ Url::route('exhibitions.frontend.exhibitions.index') . '?title=' . urlencode($film->getTitle())}}">
                    @lang('exhibitions.frontend.film.show.search_exhibitions')
                </a>
            </div>
        </div>
    </div>
@stop
