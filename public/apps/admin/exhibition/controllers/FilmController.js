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

	.controller('FilmController', ['$scope','$modal', 'ExhibitionService', 
		function($scope, $modal, Exhibition)
	{
		$scope.film = Exhibition.film();

		$scope.add = function()
		{
			$modal.open({
				templateUrl: ''
			})
			.result.then(function(film)
			{
				/**
				 * It sets the film of the exhibition.
				 */
				Exhibition.film( film );
			});
		};

		$scope.filmSelected = function(selection)
		{
			if( angular.isDefined(selection))
			{
				Exhibition.film( selection.originalObject );
			}else{
				//So, we do the film invalid.
				delete $scope.film.id;
			}
		};
	}]);
});