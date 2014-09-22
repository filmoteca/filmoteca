/**
 | namespace 
 * Author:
 *
 * Dependencies:
 */

/* global define,requirejs, angular,domready */

(function(factory)
{
	'use strict';

	if( typeof define === 'function' && define.amd )
	{
		requirejs(['angular','domready','angucomplete-alt'], factory);
	}else{
		factory(angular, domready);
	}
})(function(angular, domready)
{
	'use strict';

	angular.module('App',[
		'RootController','ExhibitionController','FilmController',
		'IconographicController', 'NotificationController',

		'IconographicService','ExhibitionService']);

	domready( function()
	{
		angular.element('body').attr('ng-controller','RootController');
		angular.bootstrap(document,['App']);
	});

});