/* global define */

(function(factory)
{
	'use strict';

	define(['angular'], factory);

})(function(angular)
{
	'use strict';

	angular.module('pages.courses.controllers.LoginController',['Notificator'])

	.controller('pages.courses.controllers.LoginController', ['$scope', '$http', '$location','Notificator',

	function($scope, $http, $location, Notificator){

		var LOGIN_URL = '/api/courses/login';

		var RECOVER_PASSWORD_URL = '/api/courses/recovery-password';

		var DASHBOARD_PATH = '/dashboard';

		$scope.message = '';

		$scope.loading = false;

		$scope.active_form = 'login';

		$scope.login = function(){
			
			$http({
				url : LOGIN_URL,
				method : 'POST',
				data : {
					email : $scope.email,
					password : $scope.password,
					cache : false
				}
			}).then(function( response ){
				
				$location.path( DASHBOARD_PATH );

			}, function( response ){

				Notificator.notify( {
					style : 'danger',
					message : 'El usuario (email) o contraseña son incorrectos.'
				});
			});
		};

		$scope.showRecoveryForm = function(){

			$scope.active_form = 'recovery';
		};

		$scope.showLoginForm = function(){

			$scope.active_form = 'login';
		};

		$scope.recoverPassword = function(){

			$http.get(RECOVER_PASSWORD_URL, {email : $scope.recovery_email}).then(function(response){

				Notificator.notify( {
					message : response.data.message
				});
			});
		};
	}]);
});