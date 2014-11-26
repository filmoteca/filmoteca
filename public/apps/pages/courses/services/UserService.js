/* global define */

(function(factory)
{
	'use strict';
	
	define(['angular'], factory);

})(function(angular)
{
	'use strict';

	angular.module('pages.courses.services.UserService', [])

	.service('pages.courses.services.UserService', [function(){

		var user = {
			name : 'Victor Aguilar',
			photo : '/public/imgs/mi-photo.png'
		};

		this.get = function(){
			return user;
		};

		this.isLogin = function(){
			return false;
		};
	}]);
});