/* globals define */

(function (factory) {

    'use strict';

    define(['angular'], factory);

})(function (angular) {

    'use strict';

    var controller = function ($scope, $location, exhibitionFactory, iconographicService, exhibitionService, $routeParams) {

        $scope.exhibition   = exhibitionFactory.make();
        $scope.icons        = iconographicService.all();
        $scope.film         = null;
        $scope.searching    = false;
        $scope.saving       = false;

        $scope.search = function () {

        	$scope.searching = true;
        };

        $scope.filmSelected = function (selection) {

            $scope.searching = false;

        	if ( typeof selection === 'undefined') {
                return;
        	}

            $scope.exhibition.exhibition_film.film  = selection.originalObject;
            $scope.film                             = selection.originalObject;
        };

        $scope.store = function () {

            $scope.saving = true;

            exhibitionService
                .store($scope.exhibition)
                .then(function () {
                    $scope.saving = false;
                    $scope.$emit('alert', {
                        type: 'success',
                        msg: 'Exhibición guardada.'
                    });
                    $location.path('/index');
                }, function () {
                    $scope.saving = false;
                    $scope.$emit('alert', {
                        type: 'danger',
                        msg: 'Error del servidor.'
                    });
                });
        };

        $scope.storeAsNew = function () {

            delete $scope.exhibition.id;
            delete $scope.exhibition.exhibition_film.id;

            $scope.store();
        };

        $scope.$on('$viewContentLoaded', function () {

            if (typeof $routeParams.id === 'undefined') {
                return;
            }

            exhibitionService
                .load($routeParams.id)
                .then(function (rawExhibition) {

                    angular.extend($scope.exhibition, rawExhibition);
                    $scope.film = $scope.exhibition.exhibition_film.film;
                    $scope.exhibition.icon = iconographicService.find($scope.exhibition.type.id)
                })
        });
    };

    controller.$inject = ['$scope', '$location', 'exhibitionFactory', 'iconographicService', 'exhibitionService', '$routeParams'];

    return controller;
});