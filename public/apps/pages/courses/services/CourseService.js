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
	}]);
});