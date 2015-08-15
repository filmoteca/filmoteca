/* globals define */

(function (factory) {

    'use strict';

    define([
            'angular',
            'admin/film/controllers/indexController',
            'admin/film/controllers/createController',
            'admin/film/services/filmService'
        ],
        factory);
})(function (
    angular,
    indexController,
    createController,
    filmService
) {

    'use strict';

    angular.module('admin.film', [])

        .controller('admin.film.controllers.indexController', indexController)
        .controller('admin.film.controllers.createController', createController)
        .service('filmService', filmService)
});