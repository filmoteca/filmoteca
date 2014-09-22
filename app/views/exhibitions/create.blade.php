@extends('layout.admin')

@section('content')

<div ng-controller="NotificationController" ng-show="isThereANotification()">
	<div class="alert alert-@{{notification.type}}">
		@{{notification-type}}
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">Agregar exhibiciones</div>
	<div class="panel-body">
		
		<div ng-controller="FilmController">
			<div class="col-md-4">
				<div class="form-group">
					<angucomplete-alt id="ex1"
						place-holder="Buscar película por título"
						pause="400"
						selected-object="filmSelected"
						remote-url="{{ URL::toRoute('api.films')}}"
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
			<div class="col-md-8">
				<div ng-show="wasFilmSelected()" class="panel panel-default">
					<div class="panel-heading">@{{film.title}}</div>
				</div>
			</div>
		</div>

		<div ng-controller="ResourceController">
			<h3>Exhibiciones</h3>
			<table ng-controller="ExhibitionController" class="table table-collapsed">
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

		<div ng-controller="ResourceController">
			<h3>Iconografía</h3>
			<table ng-controller="IconographicController" class="table table-collapsed">
				<tr>
					<th>Nombre</th>
					<th>Icono</th>
					<th>Acciones</th>
				</tr>
				<tr ng-repeat="icon in resources">
					<td>@{{icon.name}}</td>
					<td><img src="@{{icon.image.url}}" class="thumbnail"></td>
					<td>
						<button class="btn btn-info" ng-click="edit($index)">Editar</button>
						<button class="btn btn-danget" ng-click="destroy($index)">Borrar</button>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="panel-footer">
		<button class="btn btn-success pull-right" ng-click="store()">Agregar</button>
		<div class="clearfix"></div>
	</div>
</div>

@stop