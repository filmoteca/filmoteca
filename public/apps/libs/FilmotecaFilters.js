/**
 * @author Victor Aguilar
 */

/* globals define, jQuery, angular*/

(function(factory)
{
	'use strict';

	if( typeof define !== 'undefined' && define.amd )
	{
		define(['jquery','angular'],factory);
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

	app.directive('flmFilters', 
		['flmFiltersConfig', '$timeout',

	function (config, $timeout) 
	{
		var controller = function($scope)
		{
			var ctrl = this;

			this.applyFilter = function(name, value, title)
			{
				var selectedItems = [];

				var unselectedItems = [];

				var filter = config.filters.default;

				if( typeof config.filters[name] === 'function' ) 
				{
					filter = config.filters[name];
				}

				var items = config.items;

				angular.forEach(items, function(item)
				{
					if( filter(item, value) )
					{
						selectedItems.push( '#' + item.id );
					}else
					{
						unselectedItems.push( '#' + item.id );
					}
				});

				angular.element( selectedItems.join(',') ).show();
				
				angular.element( unselectedItems.join(',') ).hide();

				var data = {
					name 	: name,
					value 	: value,
					title 	: (angular.isDefined(title))? title : value,
					results : selectedItems.length
				};

				$scope.$root.$broadcast('filterSelected', data );
			};

			if($scope.onlyController){

				var parts = document.location.href.split('/');
				var last = parts.length -1;
				
				if( parts[last] === 'exhibition' ) return;

				var name = parts[last -2];

				if(name === 'especial-function'){
					
					name = 'icon';	
				}

				$timeout(function(){

					ctrl.applyFilter(name, parts[last-1], decodeURI(parts[last]));
				});
			}
		};

		var link = function($scope, $element, $attr, ctrl) 
		{	
			if( $scope.onlyController ) return;

			$element.on('click', function()
			{	
				/**
				 * Angular (o firefox) le pone comillas dobles a value, aunque ya 
				 * tenga comillas dobles.
				 */
				var value = $scope.value.replace('"','','gim');

				$scope.$apply(function(){
					ctrl.applyFilter($scope.filter, value, $scope.title);
				});
			});
		};
		
		return {
			restrict: 'A',
			priority: 0,
			require: 'flmFilters',
			scope: {
				filter 	: '@filterName',
				value 	: '@filterValue',
				title 	: '@filterTitle',
				onlyController : '=flmFilters' //Si es true, entonces, solo se quiere utilziar el controlador.
			},
			controller: controller,
			link: link
		};
	}]);
});