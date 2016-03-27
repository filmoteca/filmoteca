@extends('layouts.default')

@section('breadcrumbs')
    <li>
        {{ HTML::link(URL::route('exhibition'),Lang::trans('exhibitions.frontend.index.breadcrumbs_title')) }}
    </li>
    <li>
        {{ HTML::link(URL::route('exhibition.history'), Lang::trans('exhibitions.frontend.history.title')) }}
    </li>
    <li class="active">{{ $exhibition->getFilm()->getTitle() }}</li>
@stop

@section('sidebar')
	@include('frontend.exhibitions.partials.billboard-subscription-form')
@stop

@section('content')
	<div class="exhibitions index">
		@include('frontend.exhibitions.partials.details')
	</div>
@stop
