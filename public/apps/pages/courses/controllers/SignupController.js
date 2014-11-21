/* global define */

(function(factory)
{
	'use strict';

	define(['angular'], factory);

})(function(angular)
{
	'use strict';

	angular.module('pages.courses.controllers.SignupController',['ui.bootstrap'])

	.controller('pages.courses.controllers.SignupController',['$scope', '$modal','$http',
	function($scope, $modal, $http){

		var SIGNUP_URL = '/courses/signup';

		$scope.user = {};

		$scope.formSended = false;

		$scope.success = false;

		$scope.uploading = false;

		$scope.signup = function(){

			$scope.uploading = true;

			$http.post(SIGNUP_URL, $scope.user).then(function( response ){

				$scope.success = response.data.success;

				$scope.message = response.data.message;

				$scope.formSended = true;

				$scope.uploading = false;
			});
		};
	}]);
});