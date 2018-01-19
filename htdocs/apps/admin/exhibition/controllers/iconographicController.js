/* global define */

(function(factory)
{
	'use strict';

	define(['angular', 'lodash'], factory);

})(function(angular, _)
{
	'use strict';

    var controller = function ($scope, $modal, iconographicService, ExhibitionMessages) {

        $scope.iconsAvailable = iconographicService.all();

        $scope.editing = false;

        $scope.programmationMenu = function () {
            $scope.templates = [{
                name: 'Menu de programación',
                url: '/apps/admin/exhibition/templates/programmation-menu.html'}];
            $scope.template = $scope.templates[0];
        }

        var openModal = function (modalScope, success) {

            $modal.open({
                templateUrl: '/apps/admin/exhibition/templates/iconographic-modal.html',
                scope : modalScope,
                controller : 'admin.exhibition.controllers.iconographicModalController'
            }).result.then(success)
        };

        $scope.create = function() {

            openModal($scope.$new(), function (icon) {
                $scope.iconsAvailable.unshift(icon)
            });
        };

        $scope.destroy = function(id) {

            iconographicService.destroy(id).then(
                function () {
                    $scope.$emit('alert', ExhibitionMessages['icon.deleted']);

                    var iconIndex = _.findIndex($scope.iconsAvailable, function (iconAvailable) {

                        return iconAvailable.id == id;
                    });

                    $scope.iconsAvailable.splice(iconIndex, 1);
                }, function () {
                    $scope.$emit('alert', ExhibitionMessages['icon.not-deleteable']);
                });
        };

        $scope.edit = function (icon) {

            var modalScope = $scope.$new();

            modalScope.oldIcon = angular.copy(icon);

            openModal(modalScope, function (icon) {

                if (angular.isUndefined(icon)) return;

                var iconIndex = _.findIndex($scope.iconsAvailable, function (iconAvailable) {

                    return iconAvailable.id == icon.id;
                });

                $scope.iconsAvailable[iconIndex] = icon;
            });
        };
    };

    controller.$inject = [
        '$scope',
        '$modal',
        'iconographicService',
        'messages'
    ];

    return controller;
});