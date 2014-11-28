/* global define */
(function(factory){

	'use strict';

	define(['angular'], factory);

})(function( angular ){

	'use strict';

	angular.module('pages.courses.controllers.RootController',[])

	.controller('pages.courses.controllers.RootController', ['$scope', function($scope){
		
		$scope.messageStyle = '';
		$scope.message = '';

		$scope.$on('RequestFinished', function(event,data){

			$scope.message = data.message;
			$scope.messageType = data.style;
		});

		$scope.$on('$viewContentLoaded', function(){
			$scope.message = '';
		});

		$scope.closeAlert = function(){
			$scope.message = '';
		};
	}]);
});