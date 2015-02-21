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
		define(['angular', 'lodash', 'ui.bootstrap'], factory);
	}else{
		factory(angular);
	}
})(function(angular, _)
{
	'use strict';

	angular.module('admin.exhibition.controllers.IconographicController', ['ui.bootstrap'])

	.controller('IconographicController', ['$scope','$modal','IconographicService','ExhibitionService',
	function($scope, $modal, Icon, Exhibition)
	{
		$scope.iconsAvailable = Icon.all();

		$scope.exhibition = Exhibition.get();



		var modalController = function($scope, $modalInstance)
		{
			$scope.icon = {};

			$scope.message = '';

			$scope.store = function()
			{
				Icon.store( $scope.icon).then(function(response)
				{
					$modalInstance.close(response.data);
				}, function()
				{
					$scope.message = 'Ocurrió un problema al guardar.';
				});
			};
		};

		$scope.create = function()
		{
			$modal.open({
				templateUrl: '/admin/api/iconographic/create',
				scope : $scope.$new(),
				/**
				 * NOTA: Aquí podría existir un problema cuando se minifique
				 * el archivo ya el nombre de las variables va a cambiar y no
				 * estoy del todo seguro si angular siempre inyecta estos dos
				 * servicios al controllador.
				 */
				controller : modalController
			})
			.result.then(function(icon)
			{
				$scope.iconsAvailable.unshift(icon);

				$scope.exhibition.type = Exhibition.icon(icon);
			});
		};

		$scope.update = function()
		{
			Exhibition.icon($scope.exhibition.icon);
			Exhibition.update();
		};

		$scope.$on('exhibitionLoaded', function(){

			if( $scope.exhibition.type === null) return;

			$scope.exhibition.type = _.find($scope.iconsAvailable, function(icon){
				return icon.id === Exhibition.icon().id;
			});
		});
	}]);
});