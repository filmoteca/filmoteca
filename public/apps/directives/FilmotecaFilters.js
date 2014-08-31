/**
 * @author Victor Aguilar
 */

/* globals define, jQuery, angular*/

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
		factory(jQuery,angular);
	}
})(function($,angular)
{
	'use strict';

	var app = angular.module('FilmotecaFilters',['URLService']);

	app.constant('flmFiltersConfig',{
		
		items: [],

		filters : {
			'default' 	: function(item,value)
			{
				return item.id == value ;
			}
		}
	});

	var flmFilters = ['flmFiltersConfig','$location', 'URL', function (config, $location, URL) 
	{
		var link = function($scope, $element) 
		{
			$element.on('click', function()
			{	
				$location.path( URL.route('exhibitions.index'));

				var selectedItems = [];

				var unselectedItems = [];

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

				var title = (angular.isDefined($scope.title))? 
											$scope.title : $scope.filterValue;

				var data = {
					name 	: $scope.filter,
					value 	: $scope.value,
					title 	: title,
					results : selectedItems.length
				};

				$scope.$root.safeApply( function()
				{
					$scope.$emit('filterSelected', data );
				});
			});
		};
		
		return {
			restrict: 'A',
			priority: 0,
			scope: {
				filter 	: '@filterName',
				value 	: '@filterValue',
				title 	: '@filterTitle',
				events	: '@filterEvents' // Jquery's events that trigget the filter
			},
			link: link
		};
	}];

	app.directive('flmFilters', flmFilters);
});