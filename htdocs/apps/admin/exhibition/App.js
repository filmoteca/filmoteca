/**
 | namespace
 * Author:
 *
 * Dependencies:
 */

/* global require */

(function (factory) {

    'use strict';

    require([
            'angular',
            'domready',
            'admin.exhibition.controllers/exhibitionController',
            'admin.exhibition.controllers/searchController',
            'admin.exhibition.controllers/indexController',
            'admin.exhibition.controllers/createController',
            'admin.exhibition.controllers/editController',
            'admin.exhibition.controllers/scheduleController',
            'admin.exhibition.controllers/iconographicController',
            'admin.exhibition.controllers/iconographicModalController',
            'admin.exhibition.directives/search',
            'admin.exhibition.directives/schedules',
            'admin.exhibition.directives/iconographics',
            'admin.exhibition.configs/$http',
            'admin.exhibition.configs/$route',
            'angucomplete-alt',
            'ngRoute',
            'ngAnimate',
            'ui.bootstrap',

            'admin.exhibition.controllers/FilmController',
            'admin.exhibition.controllers/FilmController',

            'admin.exhibition.services/FilmService',
            'admin.exhibition.services/ExhibitionService',
            'admin.exhibition.services/AuditoriumService',
            'admin.exhibition.services/IconographicService',
            'admin.exhibition.services/NotificationService',

            'file-model',

            'syntara'
        ],
        factory);
})(function (angular,
             domready,
             exhibitionController,
             searchController,
             indexController,
             createController,
             editController,
             scheduleController,
             iconographicController,
             iconographicModalController,
             search,
             schedules,
             iconographics,
             httpConfig,
             routeConfig) {

    'use strict';

    angular.module('admin.exhibition', [
            'ui.bootstrap',
            'angucomplete-alt',
            'ngRoute',
            'ngAnimate',

            'admin.exhibition.controllers.FilmController',

            'admin.exhibition.services.FilmService',
            'admin.exhibition.services.ExhibitionService',
            'admin.exhibition.services.AuditoriumService',
            'admin.exhibition.services.IconographicService',
            'admin.exhibition.services.NotificationService',

            'FileModel'
        ]
    )

        .controller('admin.exhibition.controllers.exhibition', exhibitionController)
        .controller('admin.exhibition.controllers.index', indexController)
        .controller('admin.exhibition.controllers.create', createController)
        .controller('admin.exhibition.controllers.edit', editController)
        .controller('admin.exhibition.controllers.searchController', searchController)
        .controller('admin.exhibition.controllers.scheduleController', scheduleController)
        .controller('admin.exhibition.controllers.iconographicController', iconographicController)
        .controller('admin.exhibition.controllers.iconographicModalController', iconographicModalController)
        .directive('search', search)
        .directive('schedules', schedules)
        .directive('iconographics', iconographics)
        .config(routeConfig)
        .config(httpConfig);

    domready(function () {
        document
            .getElementsByTagName('body')[0]
            .setAttribute('data-ng-controller', 'admin.exhibition.controllers.exhibition');
        angular.bootstrap(document, ['admin.exhibition']);
    });
});