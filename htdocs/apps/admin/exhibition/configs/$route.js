/* globals require */

(function (factory) {

    'use strict';

    define([], factory);
})(function () {

    'use strict';

    var config = function ($routeProvider) {

        $routeProvider
            .when('/index', {
                templateUrl : '/apps/admin/exhibition/templates/index.html',
                controller: 'admin.exhibition.controllers.index'
            })
            .when('/create',{
                templateUrl : '/apps/admin/exhibition/templates/create.html',
                controller: 'admin.exhibition.controllers.create'
            })
            .when('/edit/:id',{
                templateUrl : '/apps/admin/exhibition/templates/create.html',
                controller: 'admin.exhibition.controllers.create'
            })
            .when('/iconographics',{
                templateUrl : '/apps/admin/exhibition/templates/iconographic.html',
                controller: 'admin.exhibition.controllers.iconographicController'
            })
            .otherwise('/index');
    };

    config.$inject = ['$routeProvider'];

    return config;
});