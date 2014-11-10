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

	angular.module('pages.filmoteca-medal.controllers.RootController', ['angularMoment', 'ui.bootstrap'])

	.controller('pages.filmoteca-medal.controllers.RootController',
		['$scope', '$modal','moment',
	function($scope, $modal, moment){

		$scope.loading = false;

		$scope.winners = _.map(winners, function(winner){

			winner.award_date = moment(winner.award_date).year();

			winner.visible = true;

			return winner;
		});

		$scope.range = [1987,2000];

		$scope.showDetails = function(index){

			var scope = $scope.$new();
			scope.winner = $scope.winners[index];

			$modal.open({
				templateUrl: 'filmoteca_medals.modal.html',
				scope : scope
			});
		};

		$scope.$watch('range', function(values){

			angular.forEach($scope.winners, function(winner){

				winner.visible = winner.award_date >= values[0] &&
								 winner.award_date <= values[1];
			});
		}, true);
	}]);
});