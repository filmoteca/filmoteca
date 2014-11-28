/* global define */

(function(factory)
{
	'use strict';
	
	define(['angular', 'pages.courses.services/UserService'], factory);

})(function(angular)
{
	'use strict';

	angular.module('pages.courses.services.CourseService', ['pages.courses.services.UserService'])

	.service('pages.courses.services.CourseService', ['$http','$location', '$rootScope' ,'pages.courses.services.UserService',

	function($http, $location, $rootScope, User){

		var SIGNUP_URL = '/api/courses/course/{course_id}/signup';

		var courses = [{
			course : {
				name : 'Limpieza de armas.'
			},
			professor :{
				name : 'Berry Burton'
			},
			venue : {
				name : 'RPD'
			},
			start_date : new Date()
		}];

		this.all = function(){

			return courses;
		};

		this.signup = function( id ){

			$http.get( SIGNUP_URL.replace('{course_id}', id) )
			.then(function(){

				$location.path( '/dashboard' );

			}, function(response){

				$rootScope.$broadcast('RequestFinished', {
					style : 'danger',
					message : response.data.error.message
				});
			});
		};
	}]);
});