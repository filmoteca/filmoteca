@extends('layouts.default')

@section('metas')

@stop

@section('title')
    @lang('exhibitions.collection.title', ['date' => $date])
@stop

@section('sidebar')
    @include('frontend.exhibitions.partials.calendar')
@stop

@section('content')
    {{ $exhibitions }}
@stop
