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
			'ui.bootstrap',
			'angular-moment',
			'pages.exhibition.services/ExhibitionService',
			'pages.exhibition.services/URLService'
			],
			factory);
	}else{
		factory(angular,_);
	}
})(function(angular,_)
{
	'use strict';

	var app = angular.module('pages.exhibition.controllers.ExhibitionController',
		['ui.bootstrap', 'angularMoment',
		'pages.exhibition.services.ExhibitionService', 'FilmotecaFilters','URLService']);


	app.controller('pages.exhibition.controllers.ExhibitionController',[
	'$scope','$modal','moment','Exhibition','URL',

	function($scope, $modal, moment, Exhibition, URL)
	{
		//$scope.usedFilter = '';
        //
		//$scope.filterResults = Exhibition.all().length;
        //
		//$scope.advices = Exhibition.titlesAndDirectories();
        //
		//$scope.urlToDetails = '';
        //
		//$scope.loading = false;
        //
        //
        //
		///**********************/
		///* ## SCOPE'S METHODS */
		///**********************/
        //
		//$scope.selectedAdvice = function(selection)
		//{
		//	var id = selection.originalObject.id;
        //
		//	$scope.urlToDetails = URL.route('exhibitions.detail', {id: id});
		//};
        //
		//$scope.showDetails = function( url )
		//{
		//	$scope.urlToDetails = url;
		//};
        //
		//$scope.showExhibitions = function()
		//{
		//	$scope.urlToDetails = '';
		//};
        //
		//$scope.showAuditorium = function(id)
		//{
		//	$modal.open({
		//		templateUrl : '/api/auditorium/:id/detail'.replace(':id', id)
		//	});
        //
		//};
        //
		///**********************/
		///* ## LISTENERS */
		///**********************/
        //
		//$scope.$on('filterSelected', function(event, data)
		//{
		//	if( data.name === 'week')
		//	{
		//		var date = moment(data.value, moment.ISO_8601);
        //
		//		$scope.startDate = date.subtract(date.weekday(), 'days' ).valueOf();
        //
		//		$scope.endDate = date.add(6, 'days').valueOf();
		//	}
        //
		//	if( data.name === 'day' )
		//	{
		//		$scope.selectedDay = data.value;
		//	}
        //
		//	$scope.usedFilter = ( _.contains(['0',''], data.value) )? 'No one' : data.name;
        //
		//	$scope.filterResults = data.results;
        //
		//	$scope.filterTitle = data.title;
		//});
        //
		//$scope.$on('$includeContentRequested', function()
		//{
		//	$scope.loading = true;
		//});
        //
		//$scope.$on('$includeContentLoaded', function()
		//{
		//	$scope.loading = false;
		//});
        //
		//$scope.$on('$includeContentError',function()
		//{
		//	$scope.loading = false;
		//	$scope.urlToDetails = '';
		//});
	}]);
});
