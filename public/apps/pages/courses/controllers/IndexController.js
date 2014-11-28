/* global define */

(function(factory)
{
	'use strict';

	define(['angular','ui.bootstrap', 
		'pages.courses.services/CourseService',
		'pages.courses.services/UserService',], factory);

})(function(angular)
{
	'use strict';

	angular.module('pages.courses.controllers.IndexController', [
		'ui.bootstrap',
		'pages.courses.services.CourseService',
		'pages.courses.services.UserService'])

	.controller('pages.courses.controllers.IndexController', ['$scope','$modal', '$location', '$http',
		'pages.courses.services.CourseService',
		'pages.courses.services.UserService',
	
	function($scope, $modal, $location, $http, Course, User){

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