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

<div ng-controller="ResourceController" class="row">
	<div class="panel panel-default">
		<div class="panel-heading">Horario</div>
		<table class="table table-collapsed table-bordered ng-cloak">
			<tr>
				<th>Sala</th>
				<th>Hora</th>
				<th>Fecha</th>
				<th>Acciones</th>
			</tr>
			<tr ng-repeat="schedule in resources">
				<td>@{{schedule.auditorium.name}}</td>
				<td>@{{schedule.entry | date : 'd/M/yyyy' }}</td>
				<td>@{{schedule.entry | date : 'hh:mm:' }}</td>
				<td>
					<button class="btn btn-info" ng-click="edit($index)">Editar</button>
					<button class="btn btn-danget" ng-click="destroy($index)">Borrar</button>
				</td>
			</tr>
		</table>
	</div>
</div>

<div ng-controller="ResourceController" class="row">
	<div class="panel panel-default">
		<div class="panel-heading">Iconografía</div>
		<table class="table table-collapsed table-bordered ng-cloak">
			<tr>
				<th>Nombre</th>
				<th>Icono</th>
				<th>Acciones</th>
			</tr>
			<tr ng-repeat="icon in resources">
				<td>@{{icon.name}}</td>
				<td><img ng-src="@{{icon.image.url}}" class="thumbnail"></td>
				<td>
					<button class="btn btn-info" ng-click="edit($index)">Editar</button>
					<button class="btn btn-danget" ng-click="destroy($index)">Borrar</button>
				</td>
			</tr>
		</table>
	</div>
</div>

<button class="btn btn-success pull-right" ng-click="store()">Agregar</button>

@stop