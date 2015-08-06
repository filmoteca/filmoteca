/* globals require */

(function (factory) {

    'use strict';

    define([], factory);
})(function () {

    'use strict';

    var controller = function ($scope, $timeout, Exhibition, Messages) {

        $scope.exhibitionLoaded = false;

        Exhibition.restart();

        $scope.$watch($scope.wasFilmSelected, function(newValue) {

            if (newValue) {
                Exhibition.store().then(function () {
                    $scope.$emit('alert', Messages['exhibition.stored']);
                });
            }
        });
    };

    controller.$inject = ['$scope', '$timeout', 'exhibitionService', 'messages'];

    return controller;
});