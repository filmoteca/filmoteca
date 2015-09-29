/* global define */

(function (factory) {

    'use strict';

    define([], factory);

})(function () {

	'use strict';

    var controller = function ($scope, auditoriumService, scheduleFactory) {

        var FIRST_ITEM 	= 0;
        var NO_ITEM 	= -1;

        $scope.editing = false;

        $scope.auditoriums = auditoriumService.all();

        $scope.editedIndex = NO_ITEM;

        $scope.add = function () {

            if ($scope.editing) {
                return $scope.saveAndAdd();
            }

            return $scope.onlyAdd();
        };

        $scope.destroy = function (index) {

            $scope.schedules.splice(index, 1);
        };

        $scope.edit = function (index) {

            $scope.editing = true;

            $scope.editedIndex = index;
        };

        $scope.ready = function () {

            $scope.editing = false;

            var schedule = $scope.schedules[$scope.editedIndex];

            var entry = schedule.date + schedule.time;

            $scope.editedIndex = NO_ITEM;

            schedule.entry = entry;
        };

        /**
         * It saves the schedule that is edited and adds a new schedule entry.
         */
        $scope.saveAndAdd = function () {

            $scope.ready().then(function () {
                $scope.onlyAdd();
            });
        };

        /**
         * It only adds a new schedule entry.
         */
        $scope.onlyAdd = function () {

            $scope.schedules.unshift(scheduleFactory.make());

            $scope.edit(FIRST_ITEM);
        };
    };

    controller.$inject = [
        '$scope',
        'auditoriumService',
        'scheduleFactory'
    ];

	return controller;
});