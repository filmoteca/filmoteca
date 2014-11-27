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

		var CHANGE_PASSWORD_URL = 	'/api/courses/change-password';	
		var LOGIN_URL = 			'/api/courses/login';
		var LOGOUT_URL = 			'/api/courses/logout';	
		var RECOVER_PASSWORD_URL = 	'/api/courses/recover-password';
		var SIGNUP_URL = 			'/api/courses/signup';

		var DASHBOARD_PATH = '/dashboard';

		var user = {
			name : 'Victor Aguilar',
			photo : '/imgs/my-photo.png'
		};

		this.get = function(){
			return user;
		};

		this.isLogin = function(){
			return angular.isDefined($cookies.logedin);
		};

		this.signup = function( newUser ){

			var fd = new FormData();

			angular.forEach(newUser, function(value,key)
			{
				fd.append(key,value);
			});

			return $http({
				method : 'POST',
				url : SIGNUP_URL, 
				data : fd,
				cache : false,
				transformRequest: angular.identity, // Required to upload file.
				headers: {'Content-Type': undefined} // Also, it is required to upload file.
			}).then(function(){

			$rootScope.$broadcast('RequestFinished',{
				style : 'success',
				message : 'Se ha enviado un mensaje a tu correo para activar tu cuenta. Este debera llegar en unos minutos.'
			});
				
			}, function(response){

				$rootScope.$broadcast('RequestFinished',{
					style : 'danger',
					message : response.data.error.message
				});
			});
		};

		this.logout = function(){
			$http.get(LOGOUT_URL).then(function(){
				
				$location.path('/');
			});

			delete $cookies.logedin;
		};

		this.login = function(data){
			$http.post(LOGIN_URL, data).then(function(){
				
				$cookies.logedin = "true";
				
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