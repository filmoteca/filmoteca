/**
 * @author Victor Aguilar
 */

(function(factory)
{
	'use strict';

	if( typeof define !== 'undefined' && define.amd )
	{
		define(
			[
			'jquery',
			'angular',
			],
			factory);
	}else{
		factory($,angular);
	}
})(function($,angular)
{
	'use strict';

	var app = angular.module('FilmotecaFilters',[]);

	app.constant('flmFiltersConfig',{
		
		items: [],

		filters : {
			'default' 	: function(item,value)
			{
				return item.id == value ;
			}
		}
	});

	var flmFilters = ['flmFiltersConfig',function (config) {		
		return {
			restrict: 'A',
			scope: {
				filter :'@filter',
				value : '@value',
			},
			link: function($scope, element) 
			{
				var selectedItems = [];

				var unselectedItems = [];

				element.on('click', function()
				{	
					/**
					 * Angular (o firefox) le pone comillas dobles a value, aunque ya 
					 * tenga comillas dobles.
					 */
					$scope.value = $scope.value.replace('"','','gim');

					var filter = config.filters.default;

					if( typeof config.filters[$scope.filter] === 'function' ) 
					{
						filter = config.filters[$scope.filter];
					}

					var items = config.items;

					angular.forEach(items, function(item)
					{
						if( filter(item, $scope.value) )
						{
							selectedItems.push( '#' + item.id );
						}else
						{
							unselectedItems.push( '#' + item.id );
						}
					});

					angular.element( selectedItems.join(',') ).show();
					
					angular.element( unselectedItems.join(',') ).hide();
				});
			}
		};
	}];

	app.directive('flmFilters', flmFilters);
});