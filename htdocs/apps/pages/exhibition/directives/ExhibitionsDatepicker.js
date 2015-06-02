/** 
 * @author Victor Aguilar
 *
 * Resumen:
 * 
 * Gracias a esta directiva y la sobre-escritura del template
 * templates/datepicker/daypicker.html en el modulo del mismo nombre de angular
 * ui-bootstrap, se ha lograr que el calendarío de angular ui
 * pueda seleccionar una semana completa.
 *
 * @dependencies: ui.bootstrap
 */

/* globals define, angular*/

(function(factory)
{
	'use strict';

	if( typeof define !== 'undefined' && define.amd )
	{
		define(['angular','ui.bootstrap','angular-moment'],factory);

	}else{
		factory(angular);
	}
})(function(angular)
{
	'use strict';

	angular.module('pages.exhibition.directives.ExhibitionsDatepicker', [
		'ui.bootstrap', 'angularMoment'])

	.directive('dayorweekpicker', ['moment',function( moment ) {
	  return {
	    restrict: 'A',
	    require: ['^datepicker'],
	    link: function($scope)
	    {
			$scope.filter = 'byMonth';

			$scope.selectedDate = moment().toDate();

			/**
			 * $scope.select is defined in datepicker of angular, but this
			 * directive need defined its. So, we have to save the 
			 * $scope.select to can continue to use.
			 */
			$scope.selectDay = $scope.select;

			/**********************/
			/* ## SCOPE'S METHODS */
			/**********************/
			$scope.selectBy = function( by )
			{
				$scope.filter = by;

                var data = {
                    name : $scope.filter,
                    value : $scope.selectedDate
                };

				$scope.$root.$broadcast('dateSelected', data);
			};

			$scope.select = function(date)
			{
				$scope.selectDay(date);

				$scope.selectedDate = date;

				$scope.selectBy( $scope.filter );
			};
			
			$scope.isActiveWeek = function(date)
			{
				if( $scope.filter !== 'byWeek' || $scope.selectedDate === null) return;

				return moment(date).week() === moment($scope.selectedDate).week();
			};

			/***************/
			/* ## EVENTS   */
			/***************/

			$scope.$on('filterUpdated', function(event, data)
			{
				//if (_.contains(['byDay','byWeek','byMonth'], data.name)) return;

				$scope.filter = 'byMonth';
			});
	    }
	  };
	}]);
});