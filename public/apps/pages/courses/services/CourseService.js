/* global define */

(function(factory)
{
	'use strict';
	
	define(['angular', 'lodash', 'pages.courses.services/UserService', 'ui.bootstrap'], factory);

})(function(angular, _)
{
	'use strict';

	angular.module('pages.courses.services.CourseService', ['pages.courses.services.UserService', 'ui.bootstrap'])

	.service('pages.courses.services.CourseService', ['$http','$location', '$rootScope', '$modal',

	function($http, $location, $rootScope, $modal){

		var SIGNUP_URL 			= '/api/courses/course/{course_id}/signup';
		var COUSER_INDEX_URL	= '/api/courses/course';

		var courses = [];

		this.all = function(){

			$http.get(COUSER_INDEX_URL).then(function( response ){

				courses.splice(0, courses.length);

				angular.forEach(response.data, function(course){
					courses.push(course);
				});
			}, function(){

				$rootScope.$broadcast('RequestFinished', {
					style : 'danger',
					message : 'No se puedieron recuperar los cursos disponibles.'
				});
			});

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

		this.show = function( id ){

			var course = _.find(courses, function(course){
				return course.id == id;
			});

			var s = $rootScope.$new();

			s.course = course;

			$modal.open({
				templateUrl : '/apps/pages/courses/templates/show.html',
				scope : s
			});
		};
	}]);
});