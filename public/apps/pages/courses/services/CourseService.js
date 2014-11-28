/* global define */

(function(factory)
{
	'use strict';
	
	define(['angular'], factory);

})(function(angular)
{
	'use strict';

	angular.module('pages.courses.services.CourseService', [])

	.service('pages.courses.services.CourseService', [function(){

		var SIGNUP_IN_COURSE_URL = '/courses/course/signup';

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

			$http.post( SIGNUP_IN_COURSE_URL + id, {id : id} )
				.then(function(response){

					$location.path( DASHBOARD_PATH );

				}, function(response){

					$rootScope.$broadcast('RequestFinished', {
						style : 'danger',
						message : response.data.error.message
					});
				});
		}
	}]);
});