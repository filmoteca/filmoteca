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
		require([
			'angular',
			'domready',
			'angucomplete-alt',

			'admin.exhibition.controllers/RootController',
			'admin.exhibition.controllers/FilmController',
			'admin.exhibition.controllers/ScheduleController',

			'admin.exhibition.services/FilmService',
			'admin.exhibition.services/ExhibitionService',
			'admin.exhibition.services/AuditoriumService',
			'admin.exhibition.services/IconographicService',
			'admin.exhibition.services/NotificationService',

			'file-model'
			], 
			factory);
})(function(angular, domready)
{
	'use strict';

	angular.module('App',[

		'angucomplete-alt',

		'admin.exhibition.controllers.RootController',
		'admin.exhibition.controllers.ScheduleController',
		'admin.exhibition.controllers.FilmController', 

		'admin.exhibition.services.FilmService',
		'admin.exhibition.services.ExhibitionService',
		'admin.exhibition.services.AuditoriumService',
		'admin.exhibition.services.IconographicService',
		'admin.exhibition.services.NotificationService',

		'FileModel'
		]);

	domready( function()
	{
		document.getElementsByTagName('body')[0].setAttribute('data-ng-controller','RootController');
		angular.bootstrap(document,['App']);
	});

});