/* globals define */

(function (factory) {

    'use strict';

    define(['angular'], factory);

})( function (angular) {

    'use strict';

    var controller =  function ($scope, $modalInstance, Icon) {

        $scope.icon = {};

        $scope.message = '';

        $scope.action = 'create';

        if(angular.isDefined($scope.oldIcon)){

            $scope.icon = $scope.oldIcon;

            $scope.action = 'update';
        }

        var closeModal = function (response) {

            $modalInstance.close(response.data);
        };

        $scope.save = function () {

            if($scope.action == 'create'){
                $scope.store();
                return;
            }

            $scope.update();
        };

        $scope.store = function () {
            Icon.store($scope.icon).then(closeModal);
        };

        $scope.update = function () {
            Icon.update($scope.icon).then(closeModal);
        }
    };

    controller.$inject = [
        '$scope',
        '$modalInstance',
        'IconographicService'
    ];

    return controller;
});