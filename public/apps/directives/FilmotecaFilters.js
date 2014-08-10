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
					console.log('I am a directive and can listen the click event');

					console.log('value: ', $scope.value);

					console.log('filter: ', $scope.filter);

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