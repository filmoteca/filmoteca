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
		'pages.filmoteca-medal.directives/SliderPipsDirective',
		'pages.chronology.controllers/RootController'
		],
		factory);

})(function(angular, domready)
{
	'use strict';
	angular.module('App',[
		'pages.filmoteca-medal.directives.SliderPips',
		'pages.chronology.controllers.RootController'
		]);
	domready( function()
	{
		document
			.getElementsByTagName('body')[0]
			.setAttribute('data-ng-controller','pages.chronology.controllers.RootController');
		angular.bootstrap(document,['App']);
	});

});