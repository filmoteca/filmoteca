/* globals require */

(function (factory) {

    'use strict';

    define([], factory);

})(function () {

    'use strict';

    var directive = function () {

        return {
            restrict: 'A',
            templateUrl: '/apps/admin/exhibition/templates/search.html',
            controller: 'admin.exhibition.controllers.searchController'
        }
    };

    directive.$inject = [];

    return directive;
});