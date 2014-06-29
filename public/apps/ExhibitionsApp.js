(function(factory)
{
	'use strict';

	if( typeof define == 'function' && define.amd )
	{
		requirejs([
			'jquery',
			'angular'
			],
			factory);
	}else{
		factory();
	}
})(function()
{
	'use strict';

	var app = angular.module('ExhibitionsApp',
		['ExhibitionController']);

	domready( function()
	{
		$('body').attr('ng-controller','ExhibitionController');
		angular.bootstrap($('body'),['ExhibitionsApp']);
	});

});