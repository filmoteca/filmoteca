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

	angular.module('admin.exhibition.controllers.RootController', [])

	.controller('RootController', [
		'$scope', '$timeout','ExhibitionService', 'NotificationService', 'IconographicService', '$location',
		 function($scope, $timeout, Exhibition, Notification, Icon, $location)
	{

	}]);
});