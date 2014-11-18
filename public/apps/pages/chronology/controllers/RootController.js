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

	angular.module('pages.chronology.controllers.RootController', ['angularMoment'])

	.controller('pages.chronology.controllers.RootController',
		['$scope', 'moment',
	function($scope, moment){

		$scope.loading = false;

		//Preparing the winners list.
		$scope.winners = _.map(winners, function(winner){

			winner.year = moment(winner.year).year();

			winner.visible = true;

			return winner;
		});

		$scope.range = [1987,2000];

		$scope.$watch('range', function(values){

			angular.forEach($scope.winners, function(winner){

				winner.visible = winner.year >= values[0] &&
								 winner.year <= values[1];
			});
		}, true);
	}]);
});