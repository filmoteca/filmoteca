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
		$scope.exhibition = Exhibition.make();

		$scope.wasFilmSelected = function()
		{
			return angular.isDefined( $scope.exhibition.exhibition_film.film.id );
		}

		$scope.store = function()
		{
			$http.post('api/admin/film/store', $socpe.exhibition)
				.success(function(event, data)
				{
					$scope.$broadcast('callbackFinished',{
						type: 'success',
						message: 'Exhibiciones guardada.'
					});

					$scope.exhibtion = Exhibition.make();
				})
				.error(function(event, data)
				{
					$scope.$broadcast('callbackFinished',{
						type: 'error',
						message: 'Error al guardar las exhibiciones.'
					});

					console.log('Error al guardar la exhibición.', data);
				});
		}
	}]);
});