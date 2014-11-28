/* global define */

(function(factory)
{
	'use strict';

	define(['angular','ui.bootstrap', 'pages.courses.services/UserService', 'Notificator'], factory);

})(function(angular)
{
	'use strict';

	angular.module('pages.courses.controllers.IndexController', [
		// 'pages.courses.controllers.LoginController',
		'ui.bootstrap', 'Notificator', 'pages.courses.services.UserService'])

	.controller('pages.courses.controllers.IndexController', ['$scope','$modal', '$location', '$http',
		'Notificator',
		'pages.courses.services.UserService',
	
	function($scope, $modal, $location, $http, Notificator, User){

		var DASHBOARD_PATH 	= '/dashboard';
		var LOGIN_PATH 		= '/login';

		$scope.showDashboard = function(){

			if( User.isLogin() ){

				$location.path( DASHBOARD_PATH );
			}else{

				$location.path( LOGIN_PATH );
			}
		};

		$scope.signupInCourse = function( id ){

			if( User.isLogin() ){

				Course.signup( id );
			}else{

				$location.path( LOGIN_PATH );
			}

		};
	}]);
});