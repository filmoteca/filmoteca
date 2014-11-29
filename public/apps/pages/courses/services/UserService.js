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

		var CHANGE_PASSWORD_URL 	= '/api/courses/student/change-password';	
		var LOGIN_URL 				= '/api/courses/student/login';
		var LOGOUT_URL 				= '/api/courses/student/logout';	
		var RECOVER_PASSWORD_URL 	= '/api/courses/student/recover-password';
		var SIGNUP_URL 				= '/api/courses/student/signup';
		var UPDATE_URL 				= '/api/courses/student/update';

		var COURSES_URL	 			= '/api/courses/student/courses';

		var DASHBOARD_PATH = '/dashboard';

		var user = {};

		var courses = [];

		this.get = function(){
			return user;
		};

		this.courses = function(){

			$http.get(COURSES_URL,{cache: false})
			.then(function(response){
				
				courses.splice(0, courses.length);

				angular.forEach(response.data, function(value){
					courses.push(value);
				});
			});

			return courses;
		};

		this.isLogin = function(){
			return angular.isDefined(user.id);
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

				user = {};
			});

			delete $cookies.logedin;
		};

		this.login = function(data){
			$http.post(LOGIN_URL, data).then(function(response){
				
				$cookies.logedin = 'true';

				angular.extend(user, response.data);

				$location.path( DASHBOARD_PATH );

			}, function(){

				$rootScope.$broadcast('RequestFinished',{
					style : 'danger',
					message : 'El usuario (email) o contraseña son incorrectos.'
				});
			});
		};

		this.changePassword = function( data ){

			return $http.post( CHANGE_PASSWORD_URL, data).then(function(){

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

		this.update = function(){

			var fd = new FormData();

			angular.forEach(user, function(value,key)
			{
				fd.append(key,value);
			});

			return $http({
				method : 'POST',
				url : UPDATE_URL, 
				data : fd,
				transformRequest: angular.identity, // Required to upload file.
				headers: {'Content-Type': undefined} // Also, it is required to upload file.
			}).then(function(response){

				angular.extend(user, response.data);

				$rootScope.$broadcast('RequestFinished',{
					style : 'success',
					message : 'Información actualizada.'
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