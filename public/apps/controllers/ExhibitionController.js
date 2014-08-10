(function(factory)
{
	'use strict';

	if( typeof define == 'function' && define.amd )
	{
		requirejs([
			'angular',
			'services/ExhibitionService',
			'constants/ExhibitionsFilters',
			'directives/FilmotecaFilters',
			'ui-bootstrap'
			],
			factory);
	}else{
		factory(angular);
	}
})(function(angular)
{
	'use strict';

	var app = angular.module('ExhibitionController',
		['ExhibitionService', 'ui.bootstrap', 'FilmotecaFilters']);

	/**
	 * Configuración.
	 */
	app.run(['Exhibition', 'flmFiltersConfig', function(Exhibitions,flmFiltersConfig)
	{
		flmFiltersConfig.items = Exhibitions.all();

		angular.extend(flmFiltersConfig.filters, Exhibitions.filters() );
	}]);

	app.controller('ExhibitionController',[
	'$scope', 'Exhibition', '$modal',

	function($scope,  $modal)
	{	
		$scope.day = new Date();

		$scope.week = new Date();

		$scope.minDate = '2014-08-1';

		$scope.maxDate = '2014-08-30';

		/**
		 * Abre un popup para mostrar los detalles de una exhibición.
		 * @param  {String} url url de los detalles de la exhibicón
		 */
		$scope.openDetails = function(url)
		{
			$modal.open({
				templateUrl : url,
				size: 'lg',
			});
		};
	}]);
});
