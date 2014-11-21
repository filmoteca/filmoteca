/* global define, angular */

(function(factory)
{
	'use strict';
	
	define(['angular'], factory);

})(function(angular)
{
	'use strict';

	angular.module('pages.courses.services.UserService', [])

	.service('pages.courses.services.UserService', [function(){

		this.isLogin = function(){
			return false;
		};
	}]);
});