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
                schedules: '='
            },
            templateUrl: '/apps/admin/exhibition/templates/schedule.html',
            controller: 'admin.exhibition.controllers.scheduleController'
        }
    };

    directive.$inject = [];

    return directive;
});