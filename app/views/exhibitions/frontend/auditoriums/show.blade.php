@extends('exhibitions.layouts.frontend')

@section('breadcrumbs')
    <li>
        {{ HTML::link(URL::route('exhibition'), Lang::trans('exhibitions.frontend.exhibition.index.breadcrumbs_title')) }}
    </li>
    <li>
        {{ HTML::link(URL::route('exhibition.auditorium.index'), Lang::trans('exhibitions.frontend.auditorium.index.title')) }}
    </li>
    <li class="active">{{ $auditorium->getName() }}</li>
@stop

@section('title')
    @Lang('exhibitions.frontend.auditorium.index.title') - {{ $auditorium->getName() }}
@stop

@section('content')
    @include('exhibitions.frontend.auditoriums.partials.details')
@stop
