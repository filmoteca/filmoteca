/* global define */
(function(factory){

	'use strict';

	define(['angular', 'file-model'], factory);
})(function(angular){

	'use strict';

	angular.module('pages.courses.directives.InputFileImage',['FileModel'])

	.directive('inputFileImage', ['$compile',function($compile){

		return {
			link : function($scope, $element){

				$element.on('click',function(){
					
					$element.next()[0].click();
				});

				$element.after( $compile('<input type="file" file-model="photo" class="ng-hide">')($scope));
			}
		};
	}]);
});