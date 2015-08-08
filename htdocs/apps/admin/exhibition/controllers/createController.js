/* globals define */

(function (factory) {

    'use strict';

    define([], factory);

})(function () {

    'use strict';

    var controller = function ($scope, exhibitionFactory, exhibitionService, messages) {

        $scope.exhibition = exhibitionFactory.make();
    };

    controller.$inject = ['$scope', 'exhibitionFactory', 'exhibitionService', 'messages'];

    return controller;
});