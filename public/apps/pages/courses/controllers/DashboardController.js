/* global define */

(function(factory)
{
	'use strict';

	define(['angular',
		'pages.courses.services/CourseService',
		'pages.courses.services/UserService'], factory);

})(function(angular)
{
	'use strict';

	angular.module('pages.courses.controllers.DashboardController',[
		'pages.courses.services.CourseService',
		'pages.courses.services.UserService'])

	.controller('pages.courses.controllers.DashboardController', ['$scope', '$http',
		'pages.courses.services.CourseService',
		'pages.courses.services.UserService',

	function($scope, $http, Course, User){

		$scope.student = User.get();

		$scope.courses = Course.all();

		$scope.changePassword = function(){

		};

		$scope.editProfile = function(){

		};

	}]);
});