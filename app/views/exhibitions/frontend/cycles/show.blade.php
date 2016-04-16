@extends('exhibitions.layouts.frontend')

@section('metas')

@stop

@section('breadcrumbs')
    <li>
        {{ html::linkRoute(
            'exhibitions.frontend.exhibitions.index',
            Lang::trans('exhibitions.frontend.exhibition.index.breadcrumbs_title')) }}
    </li>
    <li>
        {{ html::linkRoute(
            'exhibitions.frontend.cycle.index',
            Lang::trans('exhibitions.frontend.cycle.index.title')) }}
    </li>
    <li class="active">{{ $cycle->getName() }}</li>
@stop

@section('title')
    @lang('exhibitions.frontend.cycle.index.title')
@stop

@section('content')

    <h1>
        @lang('exhibitions.frontend.cycle.show.title', ['cycle_name' => $cycle->getName()])
    </h1>

    <div class="exhibitions index">
        @foreach ($exhibitions as $exhibition)
            @include('exhibitions.frontend.exhibitions.partials.details')
        @endforeach

        <div class="text-center">
            {{ $exhibitions->links() }}
        </div>
    </div>
@stop
