/**
 * @author Victor Aguilar
 *
 */

/* global define, angular, _ */

(function(factory)
{
	'use strict';

	if( typeof define == 'function' && define.amd )
	{
		define([
			'angular',
			'lodash',
			'services/ExhibitionService',
			'services/URLService',
			'constants/ExhibitionsFilters',
			'ui-bootstrap',
			'angular-moment'
			],
			factory);
	}else{
		factory(angular,_);
	}
})(function(angular,_)
{
	'use strict';

	var app = angular.module('ExhibitionController',
		['ExhibitionService', 'ui.bootstrap', 'FilmotecaFilters','angularMoment', 'URLService']);

	/**
	 * Configuración.
	 */
	app.run(['Exhibition', 'flmFiltersConfig', 'datepickerConfig', 'moment',
		function(Exhibitions,flmFiltersConfig,datepickerConfig, moment)
	{
		flmFiltersConfig.items = Exhibitions.all();
		
		angular.extend(datepickerConfig, {

			minDate : moment().subtract( moment().date() - 1, 'days').toDate(),

			maxDate : moment( moment().year() + '-' + (moment().month() + 1) + '-' + moment()
				.daysInMonth(),'YYYY-MM-DD').toDate(),

			minMode : 'day',

			maxMode : 'day',

			showWeek : 'true'
		});

		angular.extend(flmFiltersConfig.filters, Exhibitions.filters() );
	}]);

	app.controller('ExhibitionController',[
	'$scope','$modal','moment','Exhibition','URL',

	function($scope, $modal, moment, Exhibition, URL)
	{	
		$scope.usedFilter = '';

		$scope.filterResults = Exhibition.all().length;

		$scope.advices = Exhibition.titlesAndDirectories();

		$scope.urlToDetails = '';

		$scope.loading = false;



		/**********************/
		/* ## SCOPE'S METHODS */
		/**********************/

		$scope.selectedAdvice = function(selection)
		{	
			var id = selection.originalObject.id;

			$scope.urlToDetails = URL.route('exhibitions.detail', {id: id});
		};

		$scope.showDetails = function( url )
		{
			$scope.urlToDetails = url;
		};

		$scope.showExhibitions = function()
		{
			$scope.urlToDetails = '';
		};



		/**********************/
		/* ## LISTENERS */
		/**********************/

		$scope.$on('filterSelected', function(event, data)
		{
			if( data.name === 'week')
			{
				var date = moment(data.value, moment.ISO_8601);

				$scope.startDate = date.subtract(date.weekday(), 'days' ).valueOf();

				$scope.endDate = date.add(6, 'days').valueOf();
			}

			if( data.name === 'day' )
			{
				$scope.selectedDay = data.value;
			}

			$scope.usedFilter = ( _.contains(['0',''], data.value) )? 'No one' : data.name;

			$scope.filterResults = data.results;

			$scope.filterTitle = data.title;
		});

		$scope.$on('$includeContentRequested', function()
		{
			$scope.safeApply(function()
			{
				$scope.loading = true;
			})
				
		});

		$scope.$on('$includeContentLoaded', function()
		{
			$scope.loading = false;
		});

		$scope.$on('$includeContentError',function()
		{
			$scope.loading = false;
			$scope.urlToDetails = '';
		});

	}]);
});
