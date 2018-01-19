/* globals define */

(function (factory) {

    'use strict';

    define([], factory);

})( function () {

    'use strict';

    var controller =  function ($scope, $modalInstance, iconographicService) {

        $scope.icon = {};

        $scope.message = '';

        $scope.action = 'create';

        $scope.saving = false;

        if (typeof $scope.oldIcon !== 'undefined') {

            $scope.icon = $scope.oldIcon;

            $scope.action = 'update';
        }

        $scope.programmationMenu = function () {
            $scope.templates = [{
                name: 'Menu de programación',
                url: '/apps/admin/exhibition/templates/programmation-menu.html'}];
            $scope.template = $scope.templates[0];
        }

        $scope.save = function () {

            $scope.saving = true;

            if ($scope.action == 'create') {
                return $scope.store();
            }

            $scope.update();
        };

        $scope.store = function () {

            iconographicService.store($scope.icon).then(closeModal);
        };

        $scope.update = function () {

            iconographicService.update($scope.icon).then(closeModal);
        };

        var closeModal = function (response) {

            $scope.saving = false;

            $modalInstance.close(response.data);
        };
    };

    controller.$inject = [
        '$scope',
        '$modalInstance',
        'iconographicService'
    ];

    return controller;
});