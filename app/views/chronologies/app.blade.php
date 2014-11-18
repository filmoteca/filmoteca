@extends('layouts.app')

@section('scripts')

	{{ HTML::script('/apps/require.config.js')}}

	{{ HTML::script(
		'/bower_components/requirejs/require.js', 
		['data-main' =>'/apps/pages/chronology/App.js'])
	}}
	

	{{-- 
		Este modulo local regresara un lista de ganadores de la medalla filmoteca.
		Definiendo así ganamos dos cosas. La primera, se evita hacer otra 
		soliciturd al servidor para recuperar la lista de ganadores. Y la otra,
		hace que nuestra lista de ganadores sea una variable local en vez de una
		global.
	--}}
	<script>
		define('filmoteca.winners', [], {{ $winners->toJson() }} )
	</script>
@stop

@section('styles')

	{{ HTML::styles(array(
		'/bower_components/jqueryui/themes/ui-lightness/jquery-ui.min.css',
		'/bower_components/jquery-ui-slider-pips/dist/jquery-ui-slider-pips.css')) }}
@stop

@section('breadcrumbs')
	<li>
		<a href="/pages/quienes-somos/index">
			Quienes somos
		</a>
	</li>
	<li class="active">
		Chronología
	</li>
@stop

{{----------------------------------------------------------------------------}}
{{-- Main Content															--}}
{{----------------------------------------------------------------------------}}

@section('content')
	
<div class="sidebar">
	@include('elements.menus.quienes-somos', array('selected' => 5))
</div>

<div class="content">

	<div class="filmoteca-medal-slider">
		<div data-slider-pips
			config="sliderConfig"
			range-model="range">
		</div>
	</div>

	<div class="loading" ng-show="loading"></div>

	<div class="filmoteca-medal-list ng-cloak">
		<div class="wrapper-items" id="wrapper-items">

			<ul class="items" id="items">

				@foreach( $winners as $index => $winner )

				<li class=""
					ng-show="winners[{{ $index }}].visible">

					<span class="year">{{$winner->year}}</span>
					<span class="description">
						{{$winner->description}}
					</span>
				</li>

				@endforeach
			</ul>
		</div>
	</div>
</div>
@stop