@extends('exhibitions.layouts.frontend')

@section('breadcrumbs')
    <li>
        {{ HTML::link(URL::route('exhibition'), Lang::trans('exhibitions.frontend.index.breadcrumbs_title')) }}
    </li>
    <li>
        {{ HTML::link(URL::route('exhibition.history'), Lang::trans('exhibitions.frontend.history.title')) }}
    </li>
    <li class="active">{{ $exhibition->getFilm()->getTitle() }}</li>
@stop

@section('content')
	<div class="exhibitions index">
		@include('exhibitions.frontend.partials.details')
	</div>
@stop
