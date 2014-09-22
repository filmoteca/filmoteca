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

	angular.module('FilmController', ['bootstrap.ui'])

	.controller('FilmController', ['$scope','$modal', function($scope, $modal)
	{
		$scope.film = $scope.exhibition.exhibition_film.film;

		$scope.add = function()
		{
			$modal.open({
				templateUrl: ''
			})
			.result.then(function(film)
			{
				angular.extend($scope.film, film);
			});
		};

		$scope.filmSelected = function(selection.originalObject.id)
		{
			angular.extend($scope.film, selection.originalObject.id);
		};
	}]);
});