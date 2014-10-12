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

		/*************************
		| Bibliotecas (no bower) |
		*************************/

		"file-model" 		: "/apps/directives/FileModel",
		"FilmotecaFilters"	: "/apps/directives/FilmotecaFilters",

		/*************
		| Biliotecas |
		*************/

		"jquery"			: "jquery/jquery.min",
		"angular" 			: "angular/angular",
		"domready" 			: "domready/ready.min",
		"ui.bootstrap" 		: "angular-bootstrap/ui-bootstrap-tpls.min",
		"angucomplete-alt" 	: "angucomplete-alt/dist/angucomplete-alt.min",
		"lodash" 			: "lodash/dist/lodash.min",
		"moment" 			: "moment/min/moment.min",
		"angular-moment" 	: "angular-moment/angular-moment.min",
		"angular-locale-mx"	: "angular-i18n/angular-locale_es-mx",
		"bootstrap"			: "bootstrap/dist/js/bootstrap.min",
		"angular-moment"	: "angular-moment/angular-moment.min",

		/********************
		| Requirejs Plugins |
		********************/

		"json" : "requirejs-plugins/src/json",
		"text" : "text/text"
	},
	"shim" : {
		/*
		|
		| The keys of shim object are name of a module.
		|
		| exports 	= Name of global variable.
		| deps		= Files list that be require by the variable global defined
		|			in exports option.
		 */

		/*********************
		| Angular is not AMD |
		*********************/
		"angular" : {
			"exports" : "angular"
		},
		"angucomplete-alt" : {
			"exports" : "angucomplete-alt",
			"deps" : ["angular"]
		},
		"ui.bootstrap" :{
			"deps" : ["angular"]
		},
		"angular-locale-mx" :{
			"deps" : ["angular"]
		},
		"bootstrap" : {
			"deps" :["jquery"]
		}
	}
};