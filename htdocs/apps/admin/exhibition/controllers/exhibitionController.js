/* globals require */

(function (factory) {

    'use strict';

    if (typeof define === 'function' && define.amd) {
        define([
                'angular',
                'admin.exhibition.module'
            ],
            factory);
    } else {
        factory(angular);
    }

})(function (angular) {

    'use strict';

    var controller = function ($scope, $timeout, Exhibition, Messages) {

        var MAX_ALERTS = 5;
        var TIMEOUT_TO_DISMISS_ALERT = 3000;
        var timer = null;

        var removeOldestAlert = function () {

            timer = $timeout(function () {
                $scope.closeAlert($scope.alerts.length -1);
            }, TIMEOUT_TO_DISMISS_ALERT);
        };

        $scope.alerts = [];

        $scope.exhibition = Exhibition.get();

        $scope.$on('alert', function(event, message) {

            $scope.alerts.unshift(message);

            while( $scope.alerts.length > MAX_ALERTS) {
                //Delete the first element. At the bottom of the stack.

                $scope.closeAlert($scope.alerts.length -1);
            }

            removeOldestAlert();
        });

        $scope.closeAlert = function (index) {

            $scope.alerts.splice(index, 1);

            if( $scope.alerts.length > 0){

                removeOldestAlert();
            }
        };

        $scope.$on('dismissAlerts', function () {
            $scope.alerts.splice(0, $scope.alerts.length);
        });

        $scope.$on('$viewContentLoaded', function () {
            $scope.alerts.splice(0, $scope.alerts.length);
        });

        $scope.wasFilmSelected = function ()
        {
            return angular.isDefined(Exhibition.film().id);
        };

        $scope.update = function ()
        {
            Exhibition.update().then(function () {

                $scope.$emit('alert', Messages['exhibition.updated']);
            });
        };
    };

    controller.$inject = [
        '$scope',
        '$timeout',
        'ExhibitionService',
        'ExhibitionMessages'
    ];

    return controller;
});