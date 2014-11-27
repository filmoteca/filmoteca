/* global define */

(function(factory)
{
	'use strict';

	define(['angular', 'pages.courses.services/UserService'], factory);

})(function(angular)
{
	'use strict';

	angular.module('pages.courses.controllers.SignupController', ['pages.courses.services.UserService'])

	.controller('pages.courses.controllers.SignupController',['$scope', 'pages.courses.services.UserService',
	function($scope, User){

		$scope.user = {
			name : 'Jill',
			last_name : 'Valentine',
			second_last_name : 'No name',
			telephone : '21579919',
			mobile : '04455-20407679',
			email : 'victor.aguilar@ciencias.unam.mx'
		};

		$scope.formSended = false;

		$scope.success = false;

		$scope.uploading = false;

		$scope.signup = function(){

			$scope.uploading = true;

			User.signup($scope.user).then(function(){
				$scope.uploading = false;
			}, function(){
				$scope.uploading= false;
			});
		};
	}]);
});