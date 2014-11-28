/*******************************************************************************
| Archivo de configuración para el cargador RequireJs.
|
| Este script debe ser cargado antes de require.js para que utilice la 
| variable global require como configuración.
|
*******************************************************************************/

/* jshint unused: false, strict: false */

var require = {
	"baseUrl": "/bower_components",
	"paths": {

		/****************************
		| Scripts de la aplicación |
		****************************/

		"admin.exhibition.App" : 			"/apps/admin/exhibition/App",
		"admin.exhibition.services" : 		"/apps/admin/exhibition/services",
		"admin.exhibition.controllers" : 	"/apps/admin/exhibition/controllers",

		"pages.exhibition.App" : 			"/apps/pages/exhibition/App",
		"pages.exhibition.services" : 		"/apps/pages/exhibition/services",
		"pages.exhibition.directives" : 	"/apps/pages/exhibition/directives",
		"pages.exhibition.controllers" : 	"/apps/pages/exhibition/controllers",

		"pages.filmoteca-medal.App" : 		"/apps/pages/filmoteca-medal/App",
		"pages.filmoteca-medal.controllers" : "/apps/pages/filmoteca-medal/controllers",
		"pages.filmoteca-medal.directives" : "/apps/pages/filmoteca-medal/directives",

		"pages.chronology.App" : 			"/apps/pages/chronology/App",
		"pages.chronology.controllers" : 	"/apps/pages/chronology/controllers",

		"pages.courses.App" : 			"/apps/pages/courses/App",
		"pages.courses.controllers" : 	"/apps/pages/courses/controllers",
		"pages.courses.services" : 		"/apps/pages/courses/services",
		"pages.courses.directives" : 	"/apps/pages/courses/directives",

		/*************************
		| Bibliotecas (no bower) |
		*************************/

		"file-model" 		: "/apps/libs/FileModel",
		"Notificator"		: "/apps/libs/Notificator",
		"FilmotecaFilters"	: "/apps/libs/FilmotecaFilters",

		/*************
		| Biliotecas |
		*************/

		"jquery"			: "jquery/dist/jquery.min",
		"jquery-ui"			: "jqueryui/ui/minified/jquery-ui.min",
		"jquery-ui-core"	: "jqueryui/ui/minified/jquery.ui.core.min",
		"jquery-ui-widget"	: "jqueryui/ui/minified/jquery.ui.widget.min",
		"jquery-ui-mouse"	: "jqueryui/ui/minified/jquery.ui.mouse.min",
		"jquery-ui-slider"	: "jqueryui/ui/minified/jquery.ui.slider.min",
		"jquery-ui-slider-pips"	: "jquery-ui-slider-pips/dist/jquery-ui-slider-pips.min",
		"angular" 			: "angular/angular",
		"domready" 			: "domready/ready.min",
		"ui.bootstrap" 		: "angular-bootstrap/ui-bootstrap-tpls.min",
		"angucomplete-alt" 	: "angucomplete-alt/dist/angucomplete-alt.min",
		"lodash" 			: "lodash/dist/lodash.min",
		"moment" 			: "moment/min/moment.min",
		"angular-moment" 	: "angular-moment/angular-moment.min",
		"angular-locale-mx"	: "angular-i18n/angular-locale_es-mx",
		"bootstrap"			: "bootstrap/dist/js/bootstrap.min",
		"ngRoute" 			: "angular-route/angular-route.min",
		"ngCookies"			: "angular-cookies/angular-cookies.min",

		//From laravel packages
		"syntara"			: "/packages/mrjuliuss/syntara/assets/js/dashboard/base",

		/********************
		| Requirejs Plugins |
		********************/

		"json" : "requirejs-plugins/src/json",
		"text" : "text/text"
	},
	"shim" : {
		/*
		|
		| The keys of shim object are module name used in require and define calls.
		|
		| exports 	= Name of global variable.
		| deps		= Files list that be required by the variable global defined
		|			in exports option.
		 */

		/*********************
		| Angular is not AMD |
		*********************/
		"angular" : {
			"exports" : "angular"
		},
		"ngRoute" : ["angular"],
		"angucomplete-alt" : ["angular"],
		"ui.bootstrap" : ["angular"],
		"angular-locale-mx" : ["angular"],
		"ngCookies" : ["angular"],
		"bootstrap" :["jquery"],
		"syntara" : ["jquery", "bootstrap"],
		"jquery-ui" : ["jquery"],
		"jquery-ui-widget" : ["jquery"],
		"jquery-ui-core" : ["jquery"],
		"jquery-ui-mouse" : ["jquery-ui-widget"],
		"jquery-ui-slider" : ["jquery-ui-core", "jquery-ui-mouse", "jquery-ui-widget"],
		"jquery-ui-slider-pips" : ["jquery-ui"]
	}
};