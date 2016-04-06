@extends('layouts.default')

@section('breadcrumbs')
    <li>
        {{ HTML::link(URL::route('exhibition'), Lang::trans('exhibitions.frontend.index.breadcrumbs_title')) }}
    </li>
    <li class="active">@Lang('exhibitions.frontend.auditorium.index.title')</li>
@stop

@section('sidebar')
    @include('frontend.exhibitions.partials.billboard-subscription-form')
@stop

@section('content')
    <h1>
        @Lang('exhibitions.frontend.auditorium.index.title')
    </h1>

    <div class="auditorium index">
        @foreach ($auditoriums as $index => $auditorium)
            @include(
                'exhibitions.frontend.auditoriums.partials.details',
                ['auditorium' => $auditorium, 'side' => $index % 2 == 0? 'left': 'right']
            )
        @endforeach
    </div>
@stop
