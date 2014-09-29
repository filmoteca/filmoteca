/**
 * Author: Jenny Louthan
 *
 * Home: http://uncorkedstudios.com/blog/multipartformdata-file-upload-with-angularjs
 *
 */

/* global define, angular */

(function(factory)
{
	'use strict';

	if( typeof define === 'function' && define.amd )
	{
		define(['angular'], factory);
	}else{
		factory(angular);
	}
})(function(angular)
{
	'use strict';

	angular.module('FileModel',[])

	.directive('fileModel', ['$parse', function ($parse) 
	{
	    return {
	        restrict: 'A',
	        link: function($scope, element, attrs) 
	        {
	            var model = $parse(attrs.fileModel);
	            var modelSetter = model.assign;
	            
	            element.bind('change', function()
	            {
	                $scope.$apply(function()
	                {
	                    modelSetter($scope, element[0].files[0]);
	                });
	            });
	        }
	    };
	}]);
});