@extends('exhibitions.layouts.frontend')

@section('breadcrumbs')
    <li>
        {{ HTML::link(
            'exhibitions.frontend.exhibitions.index',
            Lang::trans('exhibitions.frontend.exhibition.index.breadcrumbs_title')) }}
    </li>
    <li>
        {{ HTML::link(URL::route('exhibition.history'), Lang::trans('exhibitions.frontend.history.title')) }}
    </li>
    <li class="active">{{ $exhibition->getFilm()->getTitle() }}</li>
@stop

@lang('exhibitions.frontend.exhibition.index.title')<

@section('content')
	<div class="exhibitions index">
		@include('exhibitions.frontend.partials.details')
	</div>
@stop