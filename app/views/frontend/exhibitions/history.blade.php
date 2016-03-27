@extends('layouts.default')

@section('breadcrumbs')
	<li>
	    {{ HTML::link('/exhibition', Lang::trans('exhibitions.frontend.index.breadcrumbs_title')) }}
	</li>
	<li class="active">@lang('exhibitions.frontend.history.title')</li>
@stop

@section('sidebar')

<div class="subscribe-box">

	@include('frontend.exhibitions.partials.billboard-subscription-form')
</div>

@stop


@section('content')

<div class="content">
	<h2>@lang('exhibitions.frontend.history.title')</h2>

	<div class="well">
		{{ Form::open(['route' => 'exhibition.find', 'method' => 'GET', 'class' => 'form-horizontal']) }}

		{{ Form::formGroup('text', 'title', 'Título', 'exhibition_finder')}}

		{{ Form::formGroup('text', 'director', 'Director', 'exhibition_finder') }}

		{{ Form::submit('Buscar', ['class' => 'btn btn-success pull-right']) }}

		<div class="clearfix"></div>

		{{ Form::close()}}
	</div>

	@if( isset($resources) )

		<div class="alert alert-success">Resultados {{ $resources->count() }}</div>

        @if( $resources->count() > 0 )

			@include('frontend.exhibitions.partials.tabulator', ['editable' => false])

		@endif
	@endif
</div>

@stop
