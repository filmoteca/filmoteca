/* global define */

(function(factory)
{
	'use strict';

	define(['angular'], factory);

})(function(angular)
{
	'use strict';

	angular.module('pages.courses.controllers.LoginController',[])

	.controller('pages.courses.controllers.LoginController', ['$scope', '$http', 

	function($scope, $http){

		var LOGIN_URL = '/courses/login';

		$scope.message = '';

		$scope.loading = false;

		$scope.signup = function(){
			
			$http({
				url : LOGIN_URL,
				method : 'POST',
				data : {
					email : $scope.email,
					password : $scope.password,
					cache : false
				}
			}).then(function( response ){

				if( response.data.success ){
					$scope.$close( response.data );
				}else{
					$scope.message = response.data.message;
				}
			}, function( response ){

				$scope.message =  response.data.message;
			});
		};

	}]);
});