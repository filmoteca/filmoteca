@extends('layouts.admin')

@section('breadcrumbs')
	<li>{{ HTML::linkRoute('admin.exhibition.index','Lista de exhibiciones') }}</li>
	<li class="active">Agregar exhibiciones</li>
@stop

@section('scripts')
{{ HTML::script(
	'/bower_components/requirejs/require.js', 
	['data-main' =>'/apps/admin/exhibition/App.js'])
}}
@stop

@section('content')

<h2>Agregar exhibiciones</h2>

<div ng-show="notification.active">
	<div class="alert alert-@{{notification.type}}" data-ng-cloak>
		@{{notification.message}}
	</div>
</div>

<div class="loading" ng-show="loading"></div>
	
<div ng-controller="FilmController" class="row">
	<div class="col-md-4">
		<div class="row">
			<div class="col-md-12">
				<span class="glyphicon glyphicon-search btn" ng-click="search()" title="Buscar"></span>
				<span class="glyphicon glyphicon-plus btn" ng-click="add()" title="Agregar"></span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" ng-show="searching">
				<angucomplete-alt id="ex1"
					placeholder="Buscar película por título"
					pause="400"
					selected-object="filmSelected"
					remote-url="{{ URL::to('/api/film/search') }}?by=title&value="
					remote-url-data-field="films"
					title-field="title"
					description-field="director"
					search-fields="title"
					image-field="thumbnail"
					minlength="3"
					text-searching="Buscando..."
					text-no-results="Ninguna película encontrada."
					input-class="form-control form-control-small">
				</angucomplete-alt>
			</div>
		</div>
	</div>
	<div class="col-md-1">
		
	</div>

	<div class="col-md-7">
		<div ng-show="wasFilmSelected()" class="panel panel-default ng-cloak">
			<div class="panel-heading">@{{film.title}}</div>
			<div class="panel-body">
				<div class="image pull-left"> <img ng-src="@{{ film.images.thumbnail }}" class="thumbnail"></div>
				<p>Título: @{{film.title}}</p>
				<p>País: @{{film.country_id}}</p>
				<p>Sinopsis: @{{film.synopsis}}</p>
			</div>
		</div>
	</div>
</div>

<br>

<div ng-controller="ScheduleController" class="row">
	<div class="panel panel-default">
		<div class="panel-heading">Horario 
			<span class="glyphicon glyphicon-plus btn" ng-click="add()" title="Agregar"></span>
		</div>
		<table class="table table-collapsed table-bordered ng-cloak">
			<tr>
				<th>Sala</th>
				<th>Fecha</th>
				<th>Hora</th>
				<th>Acciones</th>
			</tr>
			<!--- Los horarios de exhibicion -->
			<tr ng-repeat="schedule in schedules">
				<td>
					<div ng-hide="editing && editedIndex == $index">
						@{{schedule.auditorium.name}}
					</div>
					<div ng-show="editing && editedIndex == $index">
						<select ng-model="schedule.auditorium" 
							ng-options="auditorium.name for auditorium in auditoriums"></select>
					</div>
				</td>
				<td>
					<div ng-hide="editing && editedIndex == $index">
						@{{schedule.date | date : 'd/M/yyyy' }}
					</div>
					<div ng-show="editing && editedIndex == $index">
						<datepicker ng-model="schedule.date"></datepicker>
					</div>
				</td>
				<td>
					
					<div ng-hide="editing && editedIndex == $index">
						@{{schedule.time | date : 'HH:mm' }}
					</div>
					<div ng-show="editing && editedIndex == $index">
						<timepicker ng-model="schedule.time" show-meridian="false"></timepicker>
					</div>
				</td>
				<td>
					<span ng-click="ready()" 
						class="glyphicon glyphicon-ok btn" 
						ng-show="editing && editedIndex == $index"
						title="Listo!"></span>
					<span ng-click="edit($index)" 
						class="glyphicon glyphicon-pencil btn"
						title="Editar"></span>
					<span ng-click="destroy($index)" 
						class="glyphicon glyphicon-remove btn"
						title="Borrar"></span>
					<br>
					<div class="alert alert-danger" ng-show="schedule.time == undefined || schedule.date == undefined">
						La fecha o la hora es invalida.
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>

<div ng-controller="IconographicController" class="row">
	<div class="panel panel-default">
		<div class="panel-heading">
			Iconografía 
			<div class="btn btn-info pull-right" ng-click="create()">Crear nuevo icono</div>
			<div class="clearfix"></div>
		</div>
		<div class="panel-body">
			<form>
				<div class="form-group">
					<label class="col-sm-2 control-label text-right">Icono (Tipo de exhibición)</label>
					<div class="col-sm-6">
						<select ng-model="exhibition.type" ng-options="icon.name for icon in iconsAvailable "></select>
					</div>
					<div class="col-sm-4">
						<img ng-src="@{{exhibition.type.icon}}" class="thumbnail image">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<button class="btn btn-success pull-right" ng-click="store()">Agregar</button>

@stop