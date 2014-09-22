/**
 * Author:
 *
 * Dependencies:
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

	angular.module('NotificationController', [])

	.controller('NotificationController', ['$scope', function($scope)
	{
		$scope.notification = null;

		$scope.close = function()
		{
			$scope.notification = null;
		};

		$scope.isThereANotification = function()
		{
			return $scope.notification !== null;
		};

		$scope.$on('callbackFinished', function(event, data)
		{
			$scope.notification = data;
		});
	}]);
});