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

	angular.module('admin.exhibition.controllers.RootController', [
		'admin.exhibition.services.ExhibitionService'])

	.controller('RootController', [
		'$scope','ExhibitionService', function($scope, Exhibition)
	{
		$scope.wasFilmSelected = function()
		{
			return angular.isDefined( Exhibition.film().id );
		};

		$scope.store = function()
		{
			if( !$scope.wasFilmSelected() )
			{
				$scope.$broadcast('Para guardar la exhibición hay que ' +
					'elegir una película.');
			}else{
				Exhibition.store();
			}
		};
	}]);
});