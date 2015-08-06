/* global define */

(function(factory)
{
	'use strict';

	define(['angular', 'lodash'], factory);

})(function(angular, _)
{
	'use strict';

    var controller = function ($scope, $modal, Icon, Exhibition, ExhibitionMessages) {

        $scope.iconsAvailable = Icon.all();

        $scope.exhibition = Exhibition.get();

        $scope.editing = false;

        $scope.create = function() {

            $modal.open({
                templateUrl: '/admin/api/iconographic/create',
                scope : $scope.$new(),
                controller : 'admin.exhibition.controllers.iconographicModalController'
            })
                .result.then(function(icon) {

                    if (angular.isUndefined(icon)) return;

                    $scope.iconsAvailable.unshift(icon);

                    $scope.exhibition.type = Exhibition.icon(icon);
                });
        };

        $scope.update = function(icon) {

            Exhibition.icon(icon);
            Exhibition.update();
        };

        $scope.destroy = function(id) {
            
            Icon.destroy(id).then(
                function () {
                    $scope.$emit('alert', ExhibitionMessages['icon.deleted']);

                    var iconIndex = _.findIndex($scope.iconsAvailable, function (iconAvailable) {

                        return iconAvailable.id == id;
                    });

                    $scope.iconsAvailable.splice(iconIndex, 1);
                },
                function () {

                    $scope.$emit('alert', ExhibitionMessages['icon.not-deleteable']);
                });
        };

        $scope.edit = function(icon)
        {
            var $s = $scope.$new();

            $s.oldIcon = angular.copy(icon);

            $modal.open({
                templateUrl: '/admin/api/iconographic/create',
                scope: $s,
                controller: 'iconographic.modalController'
            })
                .result.then(function (icon) {
                    if (angular.isUndefined(icon)) return;

                    var iconIndex = _.findIndex($scope.iconsAvailable, function (iconAvailable) {

                        return iconAvailable.id == icon.id;
                    });

                    $scope.iconsAvailable[iconIndex] = icon;
                });
        };

        $scope.deleteExhibitionIcon = function () {

            Exhibition.icon(null);
            Exhibition.update();
        };

        $scope.$on('exhibitionLoaded', function (){

            if ($scope.exhibition.type === null) return;

            $scope.exhibition.type = _.find($scope.iconsAvailable, function (icon) {
                return icon.id === Exhibition.icon().id;
            });
        });
    };

    controller.$inject = [
        '$scope',
        '$modal',
        'IconographicService',
        'ExhibitionService',
        'ExhibitionMessages'
    ];

    return controller;
});