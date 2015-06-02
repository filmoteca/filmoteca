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
		'$scope','$modal', '$location',
		'pages.courses.services.CourseService',
		'pages.courses.services.UserService',

	function($scope, $modal, $location, Course, User){

		if( ! User.isLogin() ){
			$location.path('/login');
		}

		$scope.currentPhoto = User.get().photo;

		$scope.user = User.get();

		if( angular.isUndefined($scope.user.id) ){
			$location.path('/login');
		}

		$scope.courses = User.courses();

		$scope.changePassword = function(){

			$modal.open({
				controller : 'pages.courses.controllers.changePassword',
				templateUrl : '/apps/pages/courses/templates/change-password.html'
			});
		};

		$scope.saveProfile = function(){

			User.update($scope.user).then(function(){

				$location.path('/dashboard');
			});
		};

		$scope.logout = function(){
			User.logout();
		};

		$scope.$watch('photo', function(value){

			if( angular.isDefined(value)){

				User.get().photo = value;

				User.update().then(function(){
					console.log(User.get().photo)
					$scope.currentPhoto = User.get().photo;
				});
			}

		}, true	);

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
			}).then(function(){
				$scope.$close();
			});
		};
	}]);
});