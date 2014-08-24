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

	var app = angular.module('ExhibitionsDatepicker',['ui.bootstrap', 'angularMoment']);

	app.directive('dayorweekpicker', ['moment',function( moment ) {
	  return {
	    restrict: 'A',
	    require: '^datepicker',
	    link: function(scope) 
	    {
				scope.filter = 'day';

				//Indica si esta en modo semana.
				scope.selectedWeek = false;

				scope.selectBy = function( by )
				{
					if( by == 'week')
					{
						scope.selectedWeek = true;
						scope.filter = 'week';
					}else{
						scope.selectedWeek = false;
						scope.filter = 'day';
					}
				};


				scope.selectedDate = null;

				//override
				scope.selectDay = scope.select;

				scope.select = function(date)
				{
					scope.selectDay(date);

					scope.selectedDate = date;
				};
				
				scope.isActiveWeek = function(date)
				{
					if(!scope.selectedWeek || scope.selectedDate === null) return;

					return moment(date).week() === moment(scope.selectedDate).week();
				};
	    }
	  };
	}]);
});