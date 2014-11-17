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

		//Preparing the winners list.
		$scope.winners = _.map(winners, function(winner){

			winner.award_date = moment(winner.award_date).year();

			winner.visible = true;

			return winner;
		});

		$scope.range = [1987,2000];


		var openModal = function( winner )
		{
			$scope.winner = winner;

			$modal.open({
				templateUrl: 'filmoteca_medals.modal.html',
				scope : $scope
			});
		};

		$scope.selectedAdvice = function( selection ){

			openModal(selection.originalObject);
		};

		$scope.show = function(index){

			openModal($scope.winners[index]);
		};

		$scope.$watch('range', function(values){

			angular.forEach($scope.winners, function(winner){

				winner.visible = winner.award_date >= values[0] &&
								 winner.award_date <= values[1];
			});
		}, true);
	}]);
});