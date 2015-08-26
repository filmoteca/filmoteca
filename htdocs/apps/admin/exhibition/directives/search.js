/* globals define */

(function (factory) {

    'use strict';

    define([], factory);

})(function () {

    'use strict';

    var directive = function () {

        return {
            restrict: 'A',
            scope: {
                url: '=',
                page: '='
            },
            templateUrl: '/apps/admin/exhibition/templates/search.html',
            controller: 'admin.exhibition.controllers.searchController'
        }
    };

    directive.$inject = [];

    return directive;
});