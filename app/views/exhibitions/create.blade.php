@extends('layouts.admin')

@section('scripts')
{{ HTML::script(
	'/bower_components/requirejs/require.js', 
	['data-main' =>'/apps/admin/exhibition/App.js'])
}}
@stop

@section('content')

<div ng-controller="NotificationController" ng-show="isThereANotification()">
	<div class="alert alert-@{{notification.type}}" data-ng-cloak>
		@{{notification-type}}
	</div>
</div>

<h2>Agregar exhibiciones</h2>
	
<div ng-controller="FilmController" class="row">
	<div class="col-md-4">
		<div class="form-group">
			<span class="glyphicon glyphicon-search pull-left"></span>

			<div class="search-autocomplete pull-right">
				<angucomplete-alt id="ex1"
					placeholder="Buscar película por título"
					pause="400"
					selected-object="filmSelected"
					remote-url="{{ URL::to('/api/films') }}?title="
					remote-data-field="films"
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

	<div class="col-md-8">
		<div ng-show="wasFilmSelected()" class="panel panel-default ng-cloak">
			<div class="panel-heading">@{{film.title}}</div>
			<div class="panel-body">
				<div class="image pull-left"> <img ng-src="@{{ film.thumbnail }}" class="thumbnail"></div>
				Lorem ipsum Dolor in Duis veniam voluptate ex deserunt ut consectetur ex sit in exercitation voluptate deserunt sit sed consectetur do in non proident dolore et.
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
				<th>Hora</th>
				<th>Fecha</th>
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
						<input type="text" ng-model="schedule.date" class="form-control">
					</div>
				</td>
				<td>
					<div ng-hide="editing && editedIndex == $index">
						@{{schedule.time | date : 'hh:mm' }}
					</div>
					<div ng-show="editing && editedIndex == $index">
						<input type="text" ng-model="schedule.time" class="form-control">
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
				</td>
			</tr>
		</table>
	</div>
</div>

<div ng-controller="IconographicController"class="row">
	<div class="panel panel-default">
		<div class="panel-heading">Iconografía 
			<span class="glyphicon glyphicon-plus btn" ng-click="add()" title="Agregar"></span>
			<div class="btn btn-info pull-right" ng-click="create()">Crear nuevo icono</div>
		</div>
		<table class="table table-collapsed table-bordered ng-cloak">
			<tr>
				<th>Nombre</th>
				<th>Icono</th>
				<th>Acciones</th>
			</tr>
			<tr ng-repeat="icon in icons">
				<td>@{{icon.name}}</td>
				<td>
					<div ng-hide="editing && editedIndex == $index">
						<img ng-src="@{{icon.icon}}" class="thumbnail">
					</div>
					<div ng-show="editing && editedIndex == $index">
						<select ng-model="icon" ng-options="_icon.name for _icon in iconsAvailable "></select>
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
				</td>
			</tr>
		</table>
	</div>
</div>

<button class="btn btn-success pull-right" ng-click="store()">Agregar</button>

@stop