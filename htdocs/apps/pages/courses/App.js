/* global require */

(function(factory)
{
	'use strict';
	
	require([
		'angular', 
		'domready',
		'ngRoute',
		'file-model',
		'pages.courses.directives/InputFileImage',
		'pages.courses.directives/Breadcrumb',
		'pages.courses.controllers/RootController',
		'pages.courses.controllers/IndexController',
		'pages.courses.controllers/SignupController',
		'pages.courses.controllers/LoginController',
		'pages.courses.controllers/DashboardController'
		], factory);

})(function(angular, domready)
{
	'use strict';

	angular.module('App',[
		'ngRoute',
		'FileModel',
		'pages.courses.directives.InputFileImage',
		'pages.courses.directives.Breadcrumb',
		'pages.courses.controllers.RootController',
		'pages.courses.controllers.IndexController',
		'pages.courses.controllers.SignupController',
		'pages.courses.controllers.LoginController',
		'pages.courses.controllers.DashboardController'
		])

	.config(['$routeProvider',function($routeProvider){

		var BASE_URL = '/apps/pages/courses/templates/';

		$routeProvider

			.when('/', {
				controller  : 'pages.courses.controllers.IndexController',
				templateUrl : BASE_URL + 'index.html'
			})

			.when('/dashboard',{
				controller  : 'pages.courses.controllers.DashboardController',
				templateUrl : BASE_URL +  'dashboard.html'
			})

			.when('/login',{
				controller : 'pages.courses.controllers.LoginController',
				templateUrl: '/apps/pages/courses/templates/login.html'
			})

			/**
			 * Ruta improvisada. No me decido en la mejor forma de manjar la 
			 * edición de un estudiante.
			 */
			.when('/student-edit',{
				controller : 'pages.courses.controllers.DashboardController',
				templateUrl: '/apps/pages/courses/templates/edit.html'	
			})

			/**
			 * Aquí el usuario podra obtener su matricula para poder 
			 * inscribirse a un curso.
			 */
			.when('/signup',{
				controller  : 'pages.courses.controllers.SignupController',
				templateUrl : BASE_URL + 'signup.html'
			})

			.when('/show',{
				templateUrl : BASE_URL + 'show.html'
			})

			.otherwise('/');
	}]);


	domready(function(){

		var body = document.getElementsByTagName('body')[0];
		
		body.setAttribute('ng-controller', 'pages.courses.controllers.RootController');

		angular.bootstrap(body, ['App']);

	});
});