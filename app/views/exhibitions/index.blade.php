@extends('layouts.default')

@section('scripts')
	{{ HTML::scripts(
		array(
			'/bower_components/domready/ready.min.js',
			'/bower_components/angular/angular.js',
			'/bower_components/angular-bootstrap/ui-bootstrap.js',
			'/bower_components/moment/min/moment.min.js',
			'/bower_components/angular-moment/angular-moment.min.js',
			'/apps/directives/ExhibitionsDatepicker.js',
			'/apps/services/ExhibitionService.js',
			'/apps/controllers/ExhibitionController.js',
			'/apps/ExhibitionsApp.js')) }}

	<script>
		
		window.exhibitions = {{$exhibitions->toJson() }}

	</script>
@stop

@section('styles')
	{{ HTML::styles(array('/assets/css/exhibitions-datepicker.css')) }}
@stop

@section('breadcrumbs')
	<li class="active">
		Programación
	</li>
@stop

@section('content')

	<div class="exhibition_search">
		<div>
			<form class="form-inline">
				<div class="form-group pull-right">
					<label for="local_search">Busca película de este mes:</label>
					<input type="text" 
						placeholder="título o director"
						class="form-control">
				</div>
			</form>
		</div>
	</div>
	<div class="clearfix"></div>

	<div class="sidebar">

		<div class="exhibition-datepicker" style="display:inline-block; min-height:200px;">
			<h3>Consultar Programación</h3>

			<datepicker 
				ng-model="dt"
				min-date="minDate" 
				max-date="maxDate"
				datepicker-mode="'day-or-week'"
				min-mode="day-or-week"
				max-mode="day-or-week"
				show-weeks="true" 
				class="well well-sm">
			</datepicker>
		</div>

		<div class="static-pages-menu">
			<ul>
				<li class="has-sub">
					<a>
						<span>
							Salas
						</span>
					</a>
					<ul>
						@foreach($auditoriums as $auditorium )
							<li class="last">
								<a ng-click="filter('auditorium','{{$auditorium->name}}')">
									<span>{{$auditorium->name}}</span>
								</a>
							</li>
						@endforeach
					</ul>
				</li>

				<li class="has-sub">
					<a>
						<span>Funciones Especiales</span>
					</a>
					<ul>
						@foreach($icons as $icon)
							<li class="last">
								<a ng-click="filter('icon','{{$icon->name}}')">
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

		<h3>Programación del mes</h3>

		<div class="wrapper-items" id="wrapper-items">

			<div class="without-results" id="without-results">
				No se encontraron películas con
				los filtros solicitados
			</div>

			<ul class="items" id="items">

				@foreach( $exhibitions as $index => $exhibition )

					<li class="thumbnail item"
						ng-hide="exhibitions[{{ $index }}].hidden">

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
										URL::action("ExhibitionController@detail") .
										'")')) 
						}}
					</li>

				@endforeach
			</ul>
		</div>
	</div>
	
@stop