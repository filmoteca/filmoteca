/* globals define */

(function (factory) {

    'use strict';

    define([], factory);
})(function () {

    'use strict';

    var config = function ($routeProvider) {

        $routeProvider
            .when('/exhibitions', {
                templateUrl : '/apps/admin/exhibition/templates/index.html',
                controller: 'admin.exhibition.controllers.index'
            })
            .when('/exhibitions/create', {
                templateUrl : '/apps/admin/exhibition/templates/create.html',
                controller: 'admin.exhibition.controllers.create'
            })
            .when('/exhibitions/edit/:id', {
                templateUrl : '/apps/admin/exhibition/templates/create.html',
                controller: 'admin.exhibition.controllers.create'
            })
            .when('/iconographics', {
                templateUrl : '/apps/admin/exhibition/templates/iconographic.html',
                controller: 'admin.exhibition.controllers.iconographicController'
            })
            .otherwise('/exhibitions');
    };

    config.$inject = ['$routeProvider'];

    return config;
});