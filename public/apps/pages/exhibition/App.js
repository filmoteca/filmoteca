/**
 * @author : Victor Aguilar
 *
 */

/* globals require, define, angular, domready */
(function(factory)
{
	'use strict';

	if( typeof define == 'function' && define.amd )
	{
		require([
			'angular',
			'domready',
			'jquery',
			'angucomplete-alt',
			'FilmotecaFilters',
			'pages.exhibition.directives/ExhibitionsDatepicker',
			'pages.exhibition.controllers/ExhibitionController',
			'angular-locale-mx',
			],
			factory);
	}else{
		factory(angular,domready);
	}
})(function(angular, domready)
{
	'use strict';
	angular.module('App',[

		'pages.exhibition.controllers.ExhibitionController',
		'pages.exhibition.directives.ExhibitionsDatepicker',

		'ngLocale',
		'angucomplete-alt',
		]);

	domready( function()
	{
		document.getElementsByTagName('body')[0].setAttribute('data-ng-controller','pages.exhibition.controllers.ExhibitionController');
		angular.bootstrap(document,['App']);
	});

});