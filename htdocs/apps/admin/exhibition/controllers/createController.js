/* globals define */

(function (factory) {

    'use strict';

    define([], factory);

})(function () {

    'use strict';

    var controller = function ($scope, $location, exhibitionFactory, iconographicService, exhibitionService) {

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
    };

    controller.$inject = ['$scope', '$location', 'exhibitionFactory', 'iconographicService', 'exhibitionService'];

    return controller;
});