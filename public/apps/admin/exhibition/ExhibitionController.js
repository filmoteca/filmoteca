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

	angular.module('ExhibitionAdminController', [])

	.controller('ExhibitionAdminController', ['$scope', function($scope)
	{
		/**
		 * Structure basic of a list of exhibitons of a film.
		 * @type {Object}
		 */
		$scope.exhibition = {
			exhibition_film : {
				film : {}
			},
			schedules : [],
			exhibition_types : []
		};
	}]);
});