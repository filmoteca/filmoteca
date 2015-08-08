/* globals define */

(function (factory) {

    'use strict';

    define([], factory);

})(function () {

    'use strict';

    var controller = function ($scope, exhibitionFactory, iconographicService) {

        $scope.exhibition = exhibitionFactory.make();

        $scope.icons = iconographicService.all();
    };

    controller.$inject = ['$scope', 'exhibitionFactory', 'iconographicService'];

    return controller;
});