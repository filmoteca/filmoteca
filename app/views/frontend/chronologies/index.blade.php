@extends('layouts.default')

@section('styles')

	{{ HTML::styles([
			'/bower_components/jquery-ui-slider-pips/dist/jquery-ui-slider-pips.css'
		])
	}}
@stop

@section('breadcrumbs')
	<li>
		<a href="/pages/quienes-somos/medalla-filmoteca">Quiénes somos</a>
	</li>
	<li class="active">
		Cronología
	</li>
@stop

@section('sidebar')
	@include('elements.menus.quienes-somos', array('selected' => 4))
@stop

@section('title')
	@lang('filmoteca.frontend.filmoteca_medals.title')
@stop

@section('content')

<h1>Cronología</h1>

@include('elements.bootstrap-modal')

<div class="event-searcher-wrapper pull-right">
	<span class="glyphicon glyphicon-search pull-left"></span>
	<input id="event-searcher">
</div>

<div class="yearevent-selector-wrapper">
	<p>@lang('filmoteca.frontend.filmoteca_medals.see_winner_by_year'):</p>
	<div id="yearevent-selector"></div>
</div>

	<div class="wrapper-items" id="wrapper-items">
		<div id="results" class="results">
			<span>@lang('filmoteca.general.results'): </span><span class="number"></span>
		</div>
		<ul class="items" id="events">
			@foreach( $events as $index => $event )
			<li class="item" data-year="{{ $event->year }}">
				<span class="year" data-id="{{ $event->id }}">
					{{ $event->year }}
				</span>
				<span class="description">
					{{$event->description}}
				</span>
			</li>
			@endforeach
		</ul>
	</div>
@stop
