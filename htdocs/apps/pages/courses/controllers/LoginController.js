/* global define */

(function(factory)
{
	'use strict';

	define(['angular','pages.courses.services/UserService'], factory);

})(function(angular)
{
	'use strict';

	angular.module('pages.courses.controllers.LoginController',[
		'pages.courses.services.UserService',])

	.controller('pages.courses.controllers.LoginController', ['$scope', 
		'pages.courses.services.UserService',

	function($scope, User){

		$scope.message = '';

		$scope.loading = false;

		$scope.active_form = 'login';

		$scope.login = function(){
			
			User.login({
				email : $scope.email,
				password : $scope.password
			});
		};

		$scope.showRecoveryForm = function(){

			$scope.active_form = 'recovery';
		};

		$scope.showLoginForm = function(){

			$scope.active_form = 'login';
		};

		$scope.recoverPassword = function(){

			User.recoverPassword($scope.recovery_email);
		};
	}]);
});