/* global define */

(function(factory)
{
	'use strict';

	define(['angular', 'Notificator'], factory);

})(function(angular)
{
	'use strict';

	angular.module('pages.courses.controllers.SignupController',['Notificator'])

	.controller('pages.courses.controllers.SignupController',['$scope','$http', 'Notificator',
	function($scope, $http, Notificator){

		var SIGNUP_URL = '/api/courses/signup';

		// $scope.user = {};
		$scope.user = {}

		$scope.formSended = false;

		$scope.success = false;

		$scope.uploading = false;

		$scope.signup = function(){

			$scope.uploading = true;

			$http.post(SIGNUP_URL, $scope.user).then(function( response ){

				Notificator.notify({
					message : 'Se ha enviado un mensaje a tu correo para activar tu cuenta. Este debera llegar en unos minutos.'
				});

				$scope.uploading = false;
			}, function(response){

				console.log(response.data.error.message);
			});
		};
	}]);
});