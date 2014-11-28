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

	angular.module('pages.courses.directives.Breadcrumb',[])

	.directive('breadcrumb', ['$location', function ($location) 
	{
		var breadcrumbs = {
			'/' : {
				'title' : 'Cursos',
				'parent' : null,
			},
			'/dashboard' :{
				'title' : 'Mis cursos',
				'parent' : '/'
			},
			'/login' : {
				'title' : 'Entrar',
				'parent' : '/'
			},
			'/signup' : {
				'title' : 'Registro',
				'parent' : '/'
			},
			'/student-edit' : {
				'title' : 'Mis datos',
				'parent' : '/dashboard'
			},
			'/detail' : {
				'title' : 'Curso',
				'parent' : '/courses'
			}
		};

	    return {
	        restrict: 'C',
	        link: function($scope, $element) 
	        {
	        	var createBreadcrumb = function(elem, path){

	        		if( path !== null ){

	        			createBreadcrumb(elem, breadcrumbs[path].parent );
						
						var new_element = '<li><a href="#{path}">{title}</li>'
								.replace('{path}', path )
								.replace('{title}', breadcrumbs[path].title);

	        			elem.append( new_element );
	        		}
	        	};

	         	$scope.$on('$viewContentLoaded', function(){

	         		var home = $element.children()[0]; //Root

	         		$element.html('');

	         		$element.append(home);

	         		createBreadcrumb($element, breadcrumbs[$location.path()].parent); //only parents

	         		var active_element = '<li class="active">{title}</li>'.replace('{title}', breadcrumbs[$location.path()].title);

					$element.append(active_element);
	         	});
	        }
	    };
	}]);
});