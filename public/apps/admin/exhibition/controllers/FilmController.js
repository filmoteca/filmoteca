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

	.controller('FilmController', ['$scope','$modal',
	'ExhibitionService','FilmService',
		function($scope, $modal, Exhibition, Film)
	{
		$scope.film = Exhibition.film();

		$scope.searching = true;

		$scope.add = function()
		{
			$scope.searching = false;

			$modal.open({
				templateUrl: '/admin/api/film/create',
				scope : $scope.$new(),
				/**
				 * NOTA: Aquí podría existir un problema cuando se minifique
				 * el archivo ya el nombre de las variables va a cambiar y no
				 * estoy del todo seguro si angular siempre inyecta estos dos
				 * servicios al controllador.
				 */
				controller : function($scope, $modalInstance)
				{
					$scope.film = {};

					$scope.message = '';

					$scope.store = function()
					{
						Film.store( $scope.film).then(function(response)
						{
							$modalInstance.close(response.data);
						}, function()
						{
							$scope.message = 'Ocurrió un problema al guardar.';
						});
					};
				}
			})
			.result.then(function(film)
			{
				/**
				 * It sets the film of the exhibition.
				 */
				$scope.film = Exhibition.film( film );
			});
		};

		$scope.search = function()
		{
			$scope.searching = true;
			//So, we do the film invalid.
			delete $scope.film.id;
		};

		$scope.filmSelected = function(selection)
		{
			if( angular.isDefined(selection))
			{
				$scope.searching = false;

				$scope.film = Exhibition.film( selection.originalObject );
			}else{
				//So, we do the film invalid.
				delete $scope.film.id;
			}
		};
	}]);
});