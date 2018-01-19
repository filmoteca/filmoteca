/* globals define */

(function (factory) {

    'use strict';

    define(['angular'], factory);

})(function (angular) {

    'use strict';

    var controller = function ($scope, $location, exhibitionFactory, iconographicService, exhibitionService, filmService, $routeParams) {

        $scope.exhibition   = exhibitionFactory.make();
        $scope.icons        = iconographicService.all();
        $scope.film         = null;
        $scope.searching    = false;
        $scope.saving       = false;

        $scope.programmationMenu = function () {
            $scope.templates = [{
                name: 'Menu de programación',
                url: '/apps/admin/exhibition/templates/programmation-menu.html'}];
            $scope.template = $scope.templates[0];
        }

        $scope.search = function (query) {

            return filmService.paginate(query).then(function (paginate) {

                $scope.searching = false;

                return paginate.data.data;
            });
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
                    $location.path('/exhibitions');
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

                    if ($scope.exhibition.type !== null) {
                        $scope.exhibition.icon = iconographicService.find($scope.exhibition.type.id)
                    }
                });
        });

        /**
         * I had to use a watch because onSelect of bootstrap-ui's is not fired.
         */
        $scope.$watch('select', function (newValue) {

            $scope.exhibition.exhibition_film.film  = newValue;
            $scope.film                             = newValue;
        });
    };

    controller.$inject = [
        '$scope',
        '$location',
        'exhibitionFactory',
        'iconographicService',
        'exhibitionService',
        'filmService',
        '$routeParams'
    ];

    return controller;
});