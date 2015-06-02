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

		$scope.year = 2000;

		//Preparing the winners list.
		$scope.winners = _.map(winners, function(winner){

			winner.year = moment(winner.award_date).year();

			winner.visible = true;

			return winner;
		});

		$scope.sliderConfig = {
			slider: {
				range : false,
				value : $scope.year
			}
		};

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

		$scope.$watch('year', function(value){

			angular.forEach($scope.winners, function(winner){

				winner.visible = winner.year == value;
			});
		}, true);
	}])
	
	.config(['SLIDER_PIP_CONFIG', function(SLIDER_PIP_CONFIG){
		SLIDER_PIP_CONFIG.slider.min = 1987;
		SLIDER_PIP_CONFIG.pips.step = 10;
	}]);
});