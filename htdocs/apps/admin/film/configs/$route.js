/* globals define */

(function (factory) {

    'use strict';

    define([], factory);
})(function () {

    'use strict';

    var config = function ($routeProvider) {

        $routeProvider
            .when('/films', {
                templateUrl : '/apps/admin/film/templates/index.html',
                controller: 'admin.film.controllers.indexController'
            })
            .when('/films/create', {
                templateUrl : '/apps/admin/film/templates/create.html',
                controller : 'admin.film.controllers.createController'
            })
            .when('/films/:id/edit', {
                templateUrl : '/apps/admin/film/templates/create.html',
                controller : 'admin.film.controllers.createController'
            })
            .when('/films/:id', {
                templateUrl: '/apps/admin/film/templates/show.html',
                controller:  'admin.film.controllers.showController',
                resolve: {
                    film: ['$route', 'filmService', function ($route, filmService) {

                        return filmService.load($route.current.params.id);
                    }]
                 }
            })
            .otherwise('/films');
    };

    config.$inject = ['$routeProvider'];

    return config;
});