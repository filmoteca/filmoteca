/* globals require */

(function (factory) {

    'use strict';

    define([], factory);
})(function () {

    'use strict';

    var controller = function ($scope, Exhibition, Messages, $routeParams){

        $scope.exhibitionLoaded = true;

        Exhibition.load($routeParams.id).then(function (exhibition) {

            $scope.exhibition = exhibition;

            $scope.$broadcast('exhibitionLoaded', exhibition);
        });
    };

    controller.$inject = ['$scope','ExhibitionService', 'ExhibitionMessages', '$routeParams'];

    return controller;
});