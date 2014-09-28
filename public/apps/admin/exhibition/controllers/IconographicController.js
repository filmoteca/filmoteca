/**
 | Author: Victor Aguilar
 |
 | NOTA IMPORTANTE! : El código del controlador es una copia de ExhibitionController
 | dentro de este mismo namespace. Hay que encontrar una forma de que el scope
 | de ambos controladores hereden las funciones comunes.
 |
 | Posiblemente se puede crear una directiva que tenga las funciones del scope
 | y herede algunas constantes como auditoriums y icons desde el controlador
 | padre, por lo cual, la directiva no debe usar un isoleted scope (scope aislado).
 |
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

	angular.module('admin.exhibition.controllers.IconographicController', [])

	.controller('IconographicController', ['$scope','ExhibitionService','IconographicService', 
	function($scope, Exhibition, Icon)
	{
		$scope.editing = false;

		$scope.iconsAvailable = Icon.all();
		
		$scope.icons = [];

		$scope.editedIndex = -1;

		$scope.add = function()
		{	
			$scope.icons = Exhibition.addIcon().icons();

			$scope.edit( 0 );
		};

		$scope.destroy = function(index)
		{
			$scope.icons = Exhibition.destroyIcon(index).icons();
		};

		$scope.edit = function(index)
		{
			$scope.editing = true;

			$scope.editedIndex = index;
		};

		$scope.ready = function()
		{
			$scope.editing = false;

			$scope.editedIndex = -1;
		};		
	}]);
});