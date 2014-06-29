(function(factory)
{
	'use strict';

	if( typeof define == 'function' && define.amd )
	{
		requirejs([
			'angular',
			'services/ExhibitionService'
			],
			factory);
	}else{
		factory();
	}
})(function()
{
	'use strict';

	var app = angular.module('ExhibitionController',
		['ExhibitionService', 'ui.bootstrap']);

	app.controller('ExhibitionController',[
	'$scope', 'Exhibition', '$modal',

	function($scope, exhibitions, $modal)
	{	
		var allExhibitions = exhibitions;

		$scope.exhibitions = allExhibitions;

		/**
		 * Recibe un tipo de filto (date o constant) y un valor
		 * para ese filtro para solamente mostrar aquellas exhibiciones
		 * que cumplan ese filtro.
		 * 
		 * @param  String type Puede ser date o constant,
		 * @param  $value Valor que se utilizara para realizar el filtrado de exhibiciones.
		 * @return array Una lista de exhibiciones que pasa el filtro
		 */
		$scope.filter = function(type, value)
		{
			console.log(type,value);
		}

		$scope.openDetails = function(url)
		{
			console.log(url);

			var options = {
				templateUlr : url,
				size: 'lg',
			};

			$modal.open(option);

		}
		
	}]);
})
