@extends('layouts.error')

@section('title')
    {{ $title }}
@stop

@section('content')
    <div class="well">
        <p class="text-center"><span class="h2">{{ $message }}</span>
        <div class="text-center">
            <img src="{{ asset('assets/imgs/' . $code . '-error.jpg') }}">
        </div>
    </div>
@stop