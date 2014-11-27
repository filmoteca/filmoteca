/* global define */

(function(factory)
{
	'use strict';

	define(['angular',
		'pages.courses.services/CourseService',
		'pages.courses.services/UserService',
		'ui.bootstrap',
		'Notificator'], factory);

})(function(angular)
{
	'use strict';

	angular.module('pages.courses.controllers.DashboardController',[
		'Notificator',
		'pages.courses.services.CourseService',
		'pages.courses.services.UserService',
		'ui.bootstrap'])

	.controller('pages.courses.controllers.DashboardController', [
		'$scope','$modal',
		'pages.courses.services.CourseService',
		'pages.courses.services.UserService',

	function($scope, $modal, Course, User){

		$scope.student = User.get();

		$scope.courses = Course.all();

		$scope.changePassword = function(){

			$modal.open({
				controller : 'pages.courses.controllers.changePassword',
				templateUrl : '/apps/pages/courses/templates/change-password.html'
			});
		};

		$scope.editProfile = function(){

		};

		$scope.logout = function(){
			User.logout();
		};

	}])

	.controller('pages.courses.controllers.changePassword', ['$scope', 'pages.courses.services.UserService', 
		function($scope, User){

		$scope.loading = false;

		$scope.areEquals = function(){

			var form = $scope.change_password_form;

			return form.new_password_a.$valid && form.new_password_b.$valid && 
				!form.new_password_a.$pristine && !form.new_password_b.$pristine &&
				$scope.new_password_a === $scope.new_password_b;
		};

		$scope.changePassword = function(){

			User.changePassword({
				new_password : $scope.new_password_a,
				old_password : $scope.old_password
			});
		};
	}]);
});