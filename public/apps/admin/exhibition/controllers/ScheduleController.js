/**
 | Author: Victor Aguilar
 |
 | RESUMEN:
 |
 */

/* global define, angular */

(function(factory)
{
	'use strict';

	if( typeof define === 'function' && define.amd )
	{
		define(['angular'], factory);
	}else{
		factory(angular);
	}
})(function(angular)
{
	'use strict';

	angular.module('admin.exhibition.controllers.ScheduleController', [])

	.controller('ScheduleController', [
		'$scope', 'AuditoriumService', 'ExhibitionService', 
	function($scope, Auditorium, Exhibition)
	{
		$scope.editing = false;

		$scope.auditoriums = Auditorium.all();

		$scope.schedules = Exhibition.schedules();

		$scope.editedIndex = -1;

		$scope.add = function()
		{	
			$scope.schedules = Exhibition.addSchedule().schedules();

			$scope.edit( 0 );
		};

		$scope.destroy = function(index)
		{
			$scope.schedules = Exhibition.destroySchedule(index).schedules();
		};

		$scope.edit = function(index)
		{
			$scope.editing = true;

			$scope.editedIndex = index;
		};

		$scope.ready = function()
		{
			$scope.editing = false;

			var schedule = $scope.schedules[$scope.editedIndex];

			var entry = schedule.date + schedule.time;

			schedule.entry = entry;

			Exhibition.updateSchedule($scope.editedIndex);

			$scope.editedIndex = -1;
		};

		$scope.$on('exhibitionLoaded', function(){

			$scope.schedules = Exhibition.schedules();
		});
	}]);
});