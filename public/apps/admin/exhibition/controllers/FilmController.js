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
		define(['angular', 'ui.bootstrap'], factory);
	}else{
		factory(angular);
	}
})(function(angular)
{
	'use strict';

	angular.module('admin.exhibition.controllers.FilmController', ['ui.bootstrap'])

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

		$scope.filmSelected = function(selection)
		{
			if( angular.isDefined(selection))
			{
				angular.extend($scope.film, selection.originalObject);
			}else{
				//So, we do the film invalid.
				delete $scope.film.id;
			}
		};
	}]);
});