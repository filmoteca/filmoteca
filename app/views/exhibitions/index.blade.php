@extends('layouts.default')

@section('scripts')
	{{ HTML::scripts(
		array(
			'/bower_components/domready/ready.min.js',
			'/bower_components/angular/angular.js',
			'/bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js',
			'/bower_components/moment/min/moment.min.js',
			'/bower_components/angular-moment/angular-moment.min.js',
			'/bower_components/angular-i18n/angular-locale_es-mx.js',
			'/bower_components/angucomplete-alt/dist/angucomplete-alt.min.js',
			'/apps/directives/ExhibitionsDatepicker.js',
			'/apps/directives/FilmotecaFilters.js',
			'/apps/services/ExhibitionService.js',
			'/apps/services/URLService.js',
			'/apps/controllers/ExhibitionController.js',
			'/apps/ExhibitionsApp.js')) }}

	<script>
		
		window.exhibitions = {{ $exhibitions->toJson() }}

	</script>

	{{-- 
		Este template sobre-escribe al template 
		templates/datepicker/day.html de anguler-ui datepicker  
	--}}
	<script id="template/datepicker/day.html" type="text/ng-template">
		@include('exhibitions.dayorweekpicker');
	</script>
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

@section('content')

	<div class="col-md-3 col-md-offset-9 exhibition-search">
			<angucomplete-alt id="ex1"
				place-holder="Search countries"
				pause="0"
				selected-object="selectedAdvice"
				local-data="advices"
				title-field="title"
				description-field="director"
				search-fields="title,director"
				image-field="thumbnail"
				minlength="1"
				input-class="form-control form-control-small"/>
	</div>
	<div class="clearfix"></div>

	<div class="sidebar">

		<div class="exhibition-datepicker" style="display:inline-block; min-height:200px;">
			<h3>Consultar Programación</h3>

			<datepicker ng-model="dt" class="well well-sm"></datepicker>
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
									class="btn"
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
									class="btn"
									<span>
										{{ HTML::image($icon->icon, $icon->name) }}
									</span>
								</a>
							</li>
						@endforeach
					</ul>
				</li>
			</ul>
		</div>

		<div class="subscribe-box">
			
			<p>Si deseas recibir cada mes la cartelera digital en tu correo electronico escribelo 
			la siguiente caja de texto.</p>

			<div class="input-group input-group-sm">
				<input type="email" 
					name="email" 
					placeholder="Tu correo electronico"
					class="form-control">
				<span class="input-group-addon">@</span>
			</div>

			<button type="button" class="btn btn-success">Suscribirse</button>
		</div>
	</div>

	<div class="content">
		<h4>Películas encontradas: @{{ filterResults }} </h4>
		<div ng-switch="usedFilter">
			<h3 ng-switch-when="week">
				Programación de la semanal del 
				<b>@{{startDate | date : 'd' }}</b> al <b>@{{endDate | date : 'd'}}</b> de 
				<b>@{{ dt | date : 'MMMM'}}</b>
			</h3>
			<h3 ng-switch-when="day">
				Programación del día <b>@{{ dt | date : 'd' }}</b>
				de <b>@{{ dt | date : 'MMMM'}}</b>
			</h3>
			<h3 ng-switch-when="auditorium">
				Programación de la sala <b>@{{filterTitle}}</b> de
				<b>{{ trans('dates.months.' . date('F') ) }}</b>
			</h3>
			<h3 ng-switch-when="icon">
				Funciones <b>@{{filterTitle}}</b> de
				<b>{{ trans('dates.months.' . date('F') ) }}</b>
			</h3>
			<h3 ng-switch-default>
				Programación del mes de <b>{{ trans('dates.months.' . date('F') ) }}</b>
			</h3>
		</div>

		<div class="wrapper-items" id="wrapper-items">

			<div class="without-results" id="without-results">
				No se encontraron películas con
				los filtros solicitados
			</div>

			<ul class="items" id="items">

				@foreach( $exhibitions as $index => $exhibition )

					<li class="thumbnail item"
						id="{{ $exhibition->id }}">

						<img src="{{ $exhibition->exhibition_film->film->thumbnail_image }}"
							alt="{{ $exhibition->exhibition_film->film->title }}">
						{{ 
							HTML::linkAction(
							'ExhibitionController@detail',
							str_limit(
								$exhibition->exhibition_film->film->title,
								20),
							array( $exhibition->id ),
							array(
								'title' => 'Ver detalles',
								'ng-click' => 
									'openDetails("' . 
										URL::action("ExhibitionController@detail", $exhibition->id) .
										'")',
								'onclick' => 'return false')) 
						}}
					</li>

				@endforeach
			</ul>
		</div>
	</div>
	
@stop