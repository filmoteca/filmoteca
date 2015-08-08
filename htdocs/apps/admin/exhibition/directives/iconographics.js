/* globals require */

(function (factory) {

    'use strict';

    define([], factory);

})(function () {

    'use strict';

    var directive = function () {

        return {
            restrict: 'A',
            scope: {
                icon: '=iconographics'
            },
            templateUrl: '/apps/admin/exhibition/templates/iconographic.html',
            controller: 'admin.exhibition.controllers.iconographicController'
        }
    };

    directive.$inject = [];

    return directive;
});