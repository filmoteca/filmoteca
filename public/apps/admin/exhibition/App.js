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
			'admin.exhibition.controllers/ScheduleController',
			'admin.exhibition.controllers/IconographicController',
			'admin.exhibition.controllers/NotificationController',

			'admin.exhibition.services/FilmService',
			'admin.exhibition.services/ExhibitionService',
			'admin.exhibition.services/AuditoriumService',
			'admin.exhibition.services/IconographicService',

			'file-model',
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
		'admin.exhibition.controllers.ScheduleController',
		'admin.exhibition.controllers.IconographicController',
		'admin.exhibition.controllers.FilmController', 
		'admin.exhibition.controllers.NotificationController',

		'admin.exhibition.services.FilmService',
		'admin.exhibition.services.ExhibitionService',
		'admin.exhibition.services.AuditoriumService',
		'admin.exhibition.services.IconographicService',

		'FileModel'
		]);

	domready( function()
	{
		document.getElementsByTagName('body')[0].setAttribute('data-ng-controller','RootController');
		angular.bootstrap(document,['App']);
	});

});