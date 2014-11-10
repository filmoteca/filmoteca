
/* globals define*/

(function(factory){
	
	'use strict';

	define(['angular','jquery-ui-slider-pips'], factory);

})(function(angular){
	
	'use strict';

	angular.module('pages.filmoteca-medal.directives.SliderPips',[])

	.directive('sliderPips', ['SLIDER_PIP_CONFIG',function(SLIDER_PIP_CONFIG){

		var link = function($scope, $element, $attr){

			$scope.config = (angular.isUndefined($scope.config))? {}: $scope.config;

			var config = angular.extend({}, SLIDER_PIP_CONFIG, $scope.config);

			config.slider.values = $scope.rangeModel;

			$element.slider(config.slider)
					.slider('pips', config.pips)
					.slider('float', config.float);

			$element.on('slidechange', function(event, ui){

				$scope.$apply(function(){

					$scope.rangeModel[0] = ui.values[0];
					$scope.rangeModel[1] = ui.values[1];
				});
			});
		};

		return {
			restrict : 'A',
			scope : {
				config : '&',
				rangeModel : '='
			},
			link: link
		};
	}])

	/**
	 * Global configuration. Modify this constant will affect to all instances
	 * of this directive.
	 */
	.constant('SLIDER_PIP_CONFIG', {
		slider: {
			range: true,
			min : 1985,
			max: 2015 , 
			step: 1
		},
		pips : {
			rest: 'label',
			step: 5,
		},
		float: {}
	});
});