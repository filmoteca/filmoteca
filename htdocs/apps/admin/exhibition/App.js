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
            'admin.exhibition.controllers/scheduleController',
            'admin.exhibition.controllers/iconographicController',
            'admin.exhibition.controllers/iconographicModalController',
            'admin.exhibition.directives/search',
            'admin.exhibition.directives/schedules',
            'admin.exhibition.directives/iconographics',
            'admin.exhibition.services/exhibitionService',
            'admin.exhibition.services/auditoriumService',
            'admin.exhibition.services/iconographicService',
            'admin.exhibition.factories/exhibitionFactory',
            'admin.exhibition.factories/scheduleFactory',
            'admin.exhibition.constants/messages',
            'admin.exhibition.configs/$http',
            'admin.exhibition.configs/$route',

            'angucomplete-alt',
            'ngRoute',
            'ngAnimate',
            'ui.bootstrap',
            'angular-moment',
            'angular.filter',
            'ngSanitize',

            'admin.exhibition.services/FilmService',
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
             scheduleController,
             iconographicController,
             iconographicModalController,
             search,
             schedules,
             iconographics,
             exhibitionService,
             auditoriumService,
             iconographicService,
             exhibitionFactory,
             scheduleFactory,
             messages,
             httpConfig,
             routeConfig) {

    'use strict';

    angular.module('admin.exhibition', [
            'ui.bootstrap',
            'angucomplete-alt',
            'ngRoute',
            'ngAnimate',
            'angularMoment',
            'angular.filter',
            'ngSanitize',

            'admin.exhibition.services.FilmService',
            'admin.exhibition.services.NotificationService',

            'FileModel'
        ]
    )

        .controller('admin.exhibition.controllers.exhibition', exhibitionController)
        .controller('admin.exhibition.controllers.index', indexController)
        .controller('admin.exhibition.controllers.create', createController)
        .controller('admin.exhibition.controllers.searchController', searchController)
        .controller('admin.exhibition.controllers.scheduleController', scheduleController)
        .controller('admin.exhibition.controllers.iconographicController', iconographicController)
        .controller('admin.exhibition.controllers.iconographicModalController', iconographicModalController)
        .directive('search', search)
        .directive('schedules', schedules)
        .directive('iconographics', iconographics)
        .service('exhibitionService', exhibitionService)
        .service('auditoriumService', auditoriumService)
        .service('iconographicService', iconographicService)
        .factory('exhibitionFactory', exhibitionFactory)
        .factory('scheduleFactory', scheduleFactory)
        .constant('messages', messages)
        .config(routeConfig)
        .config(httpConfig);

    domready(function () {
        document
            .getElementsByTagName('body')[0]
            .setAttribute('data-ng-controller', 'admin.exhibition.controllers.exhibition');
        angular.bootstrap(document, ['admin.exhibition']);
    });
});