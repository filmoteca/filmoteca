@extends('layouts.app')

@section('scripts')

	{{ HTML::script('/apps/require.config.js')}}

	{{ HTML::script(
		'/bower_components/requirejs/require.js', 
		['data-main' =>'/apps/pages/filmoteca-medal/App.js'])
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

	<script type="text/ng-template" id="filmoteca_medals.modal.html">
		@include('filmoteca_medals.modal')
	</script>
@stop

@section('styles')

	{{ HTML::styles(array(
		'/bower_components/angucomplete-alt/angucomplete-alt.css',
		'/bower_components/jqueryui/themes/ui-lightness/jquery-ui.min.css',
		'/bower_components/jquery-ui-slider-pips/dist/jquery-ui-slider-pips.css')) }}
@stop

@section('breadcrumbs')
	<li>
		Quienes somos
	</li>
	<li class="active">
		Medalla filmoteca
	</li>
@stop

{{----------------------------------------------------------------------------}}
{{-- Main Content															--}}
{{----------------------------------------------------------------------------}}

@section('content')
	
<div class="sidebar">
	Static pages menu
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
				
				{{-- No podemos usar ng-repeat porque necesitamos la url de la 
				imagen y esta solamente esta disponible al llamar una función
				en el modelo eloquent.--}}

				@foreach( $winners as $index => $winner )

				<li class="thumbnail item"
					ng-show="winners[{{ $index }}].visible">

					<img src="{{ $winner->image->url('thumbnail') }}"
						alt="{{ $winner->name }}">
					{{ 
						HTML::link(
						'filmoteca-medal/' . $winner->id . '/detail',
						str_limit(
							$winner->name,
							20),
						array(
							'title' => 'Ver detalles',
							'ng-click' => 'showDetails("' . $index . '")',
							'onclick' => 'return false'
							)
						)
					}}
				</li>

				@endforeach
			</ul>
		</div>
	</div>
</div>
@stop