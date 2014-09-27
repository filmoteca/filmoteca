/**
 | namespace 
 * Author:
 *
 * Dependencies:
 */

/* global define,require, angular,domready */

(function(factory)
{
	'use strict';

	if( typeof define === 'function' && define.amd )
	{
		require([
			'angular',
			'domready',
			'angucomplete-alt',

			'admin.exhibition.controllers/RootController',
			'admin.exhibition.controllers/FilmController',
			'admin.exhibition.controllers/ResourceController',
			'admin.exhibition.controllers/NotificationController',

			'admin.exhibition.services/IconographicService',
			'admin.exhibition.services/ExhibitionService'
			], 
			factory);
	}else{
		factory(angular, domready);
	}
})(function(angular, domready)
{
	'use strict';

	angular.module('App',[

		'angucomplete-alt',

		'admin.exhibition.controllers.RootController',
		'admin.exhibition.controllers.ResourceController',
		'admin.exhibition.controllers.FilmController', 
		'admin.exhibition.controllers.NotificationController',

		'admin.exhibition.services.IconographicService',
		'admin.exhibition.services.ExhibitionService'
		]);

	domready( function()
	{
		document.getElementsByTagName('body')[0].setAttribute('data-ng-controller','RootController')
		angular.bootstrap(document,['App']);
	});

});