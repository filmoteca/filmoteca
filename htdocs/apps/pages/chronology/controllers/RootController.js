/**
 * Author:
 *
 * Dependencies:
 */

/* global define */

(function(factory)
{
	'use strict';
	
	define(['angular','lodash','filmoteca.winners', 'angular-moment', 'ui.bootstrap'], factory);

})(function(angular, _, winners)
{
	'use strict';

	angular.module('pages.chronology.controllers.RootController', ['angularMoment',
		'pages.filmoteca-medal.directives.SliderPips'])

	.controller('pages.chronology.controllers.RootController',
		['$scope', 'moment',
	function($scope, moment){

		$scope.loading = false;

		//Preparing the winners list.
		$scope.winners = _.map(winners, function(winner){

			winner.year = parseInt(winner.year);

			winner.visible = true;

			return winner;
		});

		$scope.range = [1959,2015];

		$scope.$watch('range', function(values){

			angular.forEach($scope.winners, function(winner){
				
				winner.visible = winner.year >= values[0] &&
								 winner.year <= values[1];
			});
		}, true);
	}])

	.config(['SLIDER_PIP_CONFIG', function(SLIDER_PIP_CONFIG){
		SLIDER_PIP_CONFIG.slider.min = 1959;
		SLIDER_PIP_CONFIG.pips.step = 10;
	}]);
});