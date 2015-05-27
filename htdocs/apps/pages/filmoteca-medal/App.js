/**
 * @author : Victor Aguilar
 *
 */

/* globals require*/
(function(factory)
{
	'use strict';

	/**
	 * La configuración global para nuestras app (require.config.js)
	 * define que angular, no require a jquery, sin embargo en esta app
	 * es necesario cargar jquery antes que angular. Ya que hacemos uso del
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
		'ngSanitize',
		'pages.filmoteca-medal.directives/SliderPipsDirective',
		'pages.filmoteca-medal.controllers/RootController'
		],
		factory);

})(function(angular, domready)
{
	'use strict';
	angular.module('App',[
		'ngSanitize',
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