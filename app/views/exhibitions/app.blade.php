@extends('layouts.app')

@section('scripts')

	<script>
		
		window.exhibitions = {{ $exhibitions->toJson() }}

	</script>

	{{-- 
		Este template sobre-escribe al template 
		templates/datepicker/day.html de anguler-ui datepicker  
	--}}
	<script id="template/datepicker/day.html" type="text/ng-template">
		@include('exhibitions.dayorweekpicker')
	</script>

	<script id="templates/exhibitions/list.html" type="text/ng-template">
		@include('exhibitions.list', array('exhibitions', $exhibitions))
	</script>
	
{{ HTML::script('/apps/require.config.js')}}

{{ HTML::script(
	'/bower_components/requirejs/require.js', 
	['data-main' =>'/apps/pages/exhibition/App.js'])
}}
@stop

@section('styles')
	{{ HTML::styles(array(
		'/bower_components/angucomplete-alt/angucomplete-alt.css',
		'/assets/css/exhibitions-datepicker.css')) }}
@stop

@section('breadcrumbs')
	<li class="active">
		Programación
	</li>
@stop

@section('sidebar')
<span class="glyphicon glyphicon-search pull-left"></span>

		<div class="search-autocomplete pull-right">
			<angucomplete-alt
				place-holder="Buscar por título o director"
				pause="0"
				selected-object="selectedAdvice"
				local-data="advices"
				title-field="title"
				description-field="director"
				search-fields="title,director"
				image-field="thumbnail"
				minlength="1"
				text-searching="Buscando..."
				text-no-results="Ninguna exhibición encontrada"
				input-class="form-control form-control-small">
			</angucomplete-alt>
		</div>

		<div class="exhibition-datepicker" style="display:inline-block; min-height:200px;">
			<h3>Consultar Programación</h3>

			<datepicker ng-model="dphone" class="well well-sm"></datepicker>
		</div>

		<div class="static-pages-menu">
			<ul>
				<li class="has-sub">
					<a><span>Salas</span></a>
					<ul>
						<li class="last">
							<a flm-filters filter-name="auditorium" filter-value="0"
								class="btn">
								<span>Cualquiera</span>
							</a>
						</li>
						@foreach($auditoriums as $auditorium )
							<li class="last">
								<a flm-filters 
									filter-name="auditorium" 
									filter-value="{{ $auditorium->id }}"
									filter-title="{{ $auditorium->name }}"
									class="btn">
									<span>{{$auditorium->name}}</span>
								</a>
							</li>
						@endforeach
					</ul>
				</li>

				<li class="has-sub">
					<a><span>Funciones Especiales</span></a>
					<ul>
						<li class="last">
							<a flm-filters filter-name="icon" filter-value="0" 
								class="btn">
								<span>Cualquiera</span>
							</a>
						</li>
						@foreach($icons as $icon)
							<li class="last">
								<a flm-filters 
									filter-name="icon" 
									filter-value="{{ $icon->id }}"
									filter-title="{{ $icon->name }}"
									class="btn">
									<span>
										{{ HTML::image($icon->image->url('thumbnail'), $icon->name) }}
									</span>
								</a>
							</li>
						@endforeach
					</ul>
				</li>
			</ul>
		</div>

		<div class="subscribe-box">
			
			<p>Recibe la cartelera digital directo a tu correo electrónico.</p>

			<div class="input-group input-group-sm">
				<input type="email" 
					name="email" 
					placeholder="Ingresa tu correo electrónico"
					class="form-control">
				<span class="input-group-addon">@</span>
			</div>

			<button type="button" class="btn btn-success">Registrarse</button>
		</div>
@stop

@section('content')
	
	<div class="exhibition-list" ng-show="!urlToDetails">
		@include('exhibitions.list', array('exhibitions', $exhibitions))
	</div>

	<div class="loading" ng-show="loading"></div>

	<div class="exhibition-detail" data-ng-include="urlToDetails" ng-show="urlToDetails">

	</div>
	
@stop