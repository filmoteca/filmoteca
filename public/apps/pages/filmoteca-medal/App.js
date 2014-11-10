/**
 * @author : Victor Aguilar
 *
 */

/* globals require*/
(function(factory)
{
	'use strict';

	/**
	 * El configuración global para nuestras app definidas en require.config.js
	 * se define que angular, no require a jquery, sin embargo en esta app
	 * es necesario cargar jquery antes que angular. Ya el hacemos uso de.
	 * plugin jquery-ui-slider-pips.
	 * @type {Object}
	 */
	require.config({
		shim : {
			'angular' : {
				'exports' : 'angular',
				'deps' : ['jquery']
			}
		}
	});

	require([
		'angular',
		'domready',
		'angucomplete-alt',
		'pages.filmoteca-medal.directives/SliderPipsDirective',
		'pages.filmoteca-medal.controllers/RootController'
		],
		factory);

})(function(angular, domready)
{
	'use strict';
	angular.module('App',[

		'angucomplete-alt',
		'pages.filmoteca-medal.directives.SliderPips',
		'pages.filmoteca-medal.controllers.RootController'
		]);
	domready( function()
	{
		document.getElementsByTagName('body')[0]
			.setAttribute(
				'data-ng-controller','pages.filmoteca-medal.controllers.RootController');
		angular.bootstrap(document,['App']);
	});

});