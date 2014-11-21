/* global define */

(function(factory)
{
	'use strict';

	define(['angular','ui.bootstrap', 'pages.courses.services/UserService', 'Notificator'], factory);

})(function(angular)
{
	'use strict';

	angular.module('pages.courses.controllers.IndexController', [
		// 'pages.courses.controllers.LoginController',
		'ui.bootstrap', 'Notificator', 'pages.courses.services.UserService'])

	.controller('pages.courses.controllers.IndexController', ['$scope','$modal', '$location', '$http',
		'Notificator',
		'pages.courses.services.UserService',
	
	function($scope, $modal, $location, $http, Notificator, User){

		var DASHBOARD_PATH = '/dashboard';

		var SIGNUP_IN_COURSE_URL = '/courses/signup-in-course/';



		var openLogin = function(){
			$modal.open({
				controller : 'pages.courses.controllers.LoginController',
				templateUrl: '/apps/pages/courses/templates/login.html'
			}).result.then(function(response){

				if( response.success ){

					$location.path( DASHBOARD_PATH );
				}
			});
		};

		$scope.showDashboard = function(){

			if( User.isLogin() ){

				$location.path( DASHBOARD_PATH );
			}else{

				openLogin();
			}
		};

		$scope.signupInCourse = function( id ){

			if( User.isLogin() ){

				$http.post( SIGNUP_IN_COURSE_URL + id, {id : id} )
					.then(function(response){

						if( response.data.success ){

							$location.path( DASHBOARD_PATH );
						}else{

							Notificator.notify({
								style: 'danger',
								type: 'alert',
								message : response.data.message
							});
						}

					});
			}else{

				openLogin();
			}

		};
	}]);
});