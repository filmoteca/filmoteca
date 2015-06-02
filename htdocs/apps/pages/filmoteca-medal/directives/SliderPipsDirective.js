
/* globals define*/

(function(factory){
	
	'use strict';

	define(['angular','jquery-ui-slider-pips'], factory);

})(function(angular){
	
	'use strict';

	angular.module('pages.filmoteca-medal.directives.SliderPips',[])

	.directive('sliderPips', ['SLIDER_PIP_CONFIG',function(SLIDER_PIP_CONFIG){

		var link = function($scope, $element){

			$scope.config = (angular.isUndefined($scope.config))? {}: $scope.config;

			//Angular does not support deep copy.
			var config = {
				slider : angular.extend({}, SLIDER_PIP_CONFIG.slider, $scope.config.slider),
				pips   : angular.extend({}, SLIDER_PIP_CONFIG.pips, $scope.config.pips),
				float  : angular.extend({}, SLIDER_PIP_CONFIG.float, $scope.config.float),
			};





			$element.slider(config.slider)
					.slider('pips', config.pips)
					.slider('float', config.float);

			$element.on('slidechange', function(event, ui){

				$scope.$apply(function(){
					if( angular.isArray( $scope.ngModel )){

						$scope.ngModel[0] = ui.values[0];
						$scope.ngModel[1] = ui.values[1];
					}else{

						$scope.ngModel = ui.value;
					}
				});
			});
		};

		return {
			restrict : 'A',
			scope : {
				config : '=',
				ngModel : '='
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
			step: 1,
			animate: true
		},
		pips : {
			rest: 'label',
			step: 5,
		},
		float: {}
	});
});