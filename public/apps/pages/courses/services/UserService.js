/* global define */

(function(factory)
{
	'use strict';
	
	define(['angular', 'ngCookies'], factory);

})(function(angular)
{
	'use strict';

	angular.module('pages.courses.services.UserService', ['ngCookies'])

	.service('pages.courses.services.UserService', ['$cookies','$http','$rootScope','$location',
		function($cookies, $http, $rootScope, $location){

		var LOGIN_URL = 			'/api/courses/login';
		var LOGOUT_URL = 			'/api/courses/logout';
		var CHANGE_PASSWORD_URL = 	'/api/courses/change-password';		
		var RECOVER_PASSWORD_URL = 	'/api/courses/recover-password';

		var DASHBOARD_PATH = '/dashboard';

		var user = {
			name : 'Victor Aguilar',
			photo : '/imgs/my-photo.png'
		};

		this.get = function(){
			return user;
		};

		this.isLogin = function(){
			return angular.isDefined( $cookies.laravel_session );
		};

		this.logout = function(){
			$http.get(LOGOUT_URL).then(function(){
				
				$location.path('/');
			});
		};

		this.login = function(data){
			$http.post(LOGIN_URL, data).then(function(){
				
				$location.path( DASHBOARD_PATH );

			}, function(){

				$rootScope.$broadcast('RequestFinished',{
					style : 'danger',
					message : 'El usuario (email) o contraseña son incorrectos.'
				});
			});
		};

		this.changePassword = function( data ){

			$http.post( CHANGE_PASSWORD_URL, data).then(function(){

				$rootScope.$broadcast('RequestFinished',{
					style : 'success',
					message : 'Contraseña cambiada.'
				});
			}, function(response){

				$rootScope.$broadcast('RequestFinished',{
					style : 'danger',
					message : response.data.error.message
				});
			});
		};

		this.recoverPassword = function(email){
			$http.get(RECOVER_PASSWORD_URL + '?email='+ email)
				.then(function(){

					$rootScope.$broadcast('RequestFinished',{
						style : 'success',
						message : 'Nueva contraseña enviada a tu correo.'
					});
				}, function(response){

					$rootScope.$broadcast('RequestFinished',{
						style : 'danger',
						message : response.data.error.message
					});
				});
		};

	}]);
});