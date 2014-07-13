(function(factory)
{
	'use strict';

	if( typeof define == 'function' && define.amd )
	{
		requirejs(
			[
			'jquery',
			'angular',
			'ExhibitionsDatepicker',
			],
			factory);
	}else{
		factory($,angular);
	}
})(function($,angular)
{
	'use strict';

	var app = angular.module('ExhibitionsApp',
		[
		'ExhibitionController',
		'ExhibitionsDatepicker'
		]);

	app.run(['$templateCache', function($templateCache)
	{
		$templateCache.put(
			'template/datepicker/datepicker.html',
			'<div ng-switch="datepickerMode" role="application" ng-keydown="keydown($event)">'+
				'<dayorweekpicker ng-switch-when="day-or-week" tabindex="0"></dayorweekpicker>' +
			'</div>'
			);
	}]);

	domready( function()
	{
		angular.element('body').attr('ng-controller','ExhibitionController');
		angular.bootstrap(document,['ExhibitionsApp']);
	});

});