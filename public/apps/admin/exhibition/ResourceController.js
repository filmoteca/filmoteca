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

	angular.module('ResourceController', [])

	.controller('ResourceController', ['$scope', function($scope)
	{
		$scope.editing = false;

		$scope.add = function()
		{
			var resource = $scope.resource.make();

			$scope.resources.push(resource);

			$scope.edit( $scope.resources.length - 1);
		};

		$scope.destroy = function($index)
		{
			$scope.resources.splice($index,1);
		};

		$scope.edit = function($index)
		{
			$scope.editing = true;

			$scope.editIndex = $index;
		};

		/**
		 * Este evento debe disparece cuando un usuario esta editando o agregando
		 * un recurso y después da click o preciona la tecla tab para perder el 
		 * foco de lo que se esta editando. En ese momento se deben de cambiar
		 * los inputs por etiquetas span.
		 */
		$scope.$on('focusLost', function()
		{
			$scope.editing = false;

			$scope.editIndex = -1;
		});
	}]);
});