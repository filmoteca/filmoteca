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

		// var search = $location.search();

		// if( angular.isDefined(search.edit))
		// {
		// 	$scope.exhibitionEdit = true;

		// 	Exhibition.load(search.edit).then(function(exhibition){
		// 		$scope.exhibition = exhibition;
		// 		$scope.$broadcast('exhibitionLoaded', $scope.exhibition);
		// 	});
		// }else{
		// 	$scope.exhibitionEdit = false;
		// 	$scope.exhibition = Exhibition.make();
		// }

		// $scope.wasFilmSelected = function()
		// {
		// 	return angular.isDefined( Exhibition.film().id );
		// };

		// $scope.store = function()
		// {
		// 	if( !$scope.wasFilmSelected() )
		// 	{
		// 		var message = 'Para guardar la exhibición hay que elegir una película.';
		// 		Notification.notify(message , 'warning');
		// 	}else{
		// 		Exhibition.store();
		// 	}
		// };

		// $scope.$on('notificationRequested', function(event, data)
		// {
		// 	data.active = true;
		// 	$scope.notification = data;

		// 	$timeout(function()
		// 	{
		// 		$scope.notification.active = false;
		// 	},5000);
		// });
	}]);
});